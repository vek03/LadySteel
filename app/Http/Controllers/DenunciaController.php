<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\Protocolo;

class DenunciaController extends Controller
{
    private $report;

    function __construct() {
        $this->report = new Denuncia();
    }

    /**
     * Display a listing of the resource.
     */
    public function indexAcatadas(Request $request) : View
    {
        Gate::authorize('attendant-actions', $request->user);

        $reports = $this->report->where('status', 1)->where('id_attendant', Auth::user()->id)->get();

        return view('atendente.acatadas', [
            'reports' => $reports,
        ]);
        
    }

    /**
     * Display a listing of the resource.
     */
    public function indexPendentes(Request $request): View
    {
        Gate::authorize('attendant-actions', $request->user);

        $reports = $this->report->where('status', 0)->get();

        return view('atendente.pendentes', [
            'reports' => $reports,
        ]);
    }


    
    public function accept(Request $request, Denuncia $report) : RedirectResponse
    {
        Gate::authorize('attendant-actions', $request->user);

        $report->status = 1;
        $report->id_attendant = $request->user()->id;
        $report->save();

        $protocol = new Protocolo(['protocol' => $request->protocol, 'status' => $request->status]);
        $report->protocol()->save($protocol);

        if($request->status == 'Protocolo Enviado')
        {
            $this->sendCustomMessage($request, $report);
        }

        return Redirect::back()->with('status', 'Denúncia acatada com sucesso!');
    }



    public function sendCustomMessage(Request $request, Denuncia $report)
    {
        $numbers = array();

        $numbers[0] = '+55' . $report->with(['victim.contacts'])->first()->victim->contacts()->first()->contact;

        $numbers[1] = '+55' . $report->with(['victim.contacts'])->first()->victim->contacts()->orderBy('id', 'desc')->first()->contact;

        $message = $report->victim()->first()->message;

        $recipients = $numbers;
        // iterate over the array of recipients and send a twilio request for each
        foreach ($recipients as $recipient) {
            $this->sendMessage($message, $recipient);
        }
        return;
    }



    private function sendMessage($message, $recipients)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients, 
                ['from' => $twilio_number, 'body' => $message] );
    }



    public function first(Request $request) : View
    {
        Gate::authorize('supervisor-actions', $request->user);

        $start = Carbon::now()->startOfDay();
        $end = Carbon::now()->endOfDay();

        $man = Carbon::now()->setTime(06,00,00);
        $tar = Carbon::now()->setTime(12,00,00);
        $noi = Carbon::now()->setTime(18,00,00);

        $period_reports = $this->report->whereBetween('created_at', [$start, $end])->get();

        $periodOfDay = array();

        for($i = 0; $i < 5; $i++){
            $periodOfDay[$i] = 0;
        }

        foreach($period_reports as $report){
            if($report->created_at->isBefore($man) && $report->created_at->isAfter($start)){
                $periodOfDay[0]++;
            }

            if($report->created_at->isBefore($tar) && $report->created_at->isAfter($man)){
                $periodOfDay[1]++;
            }

            if($report->created_at->isBefore($noi) && $report->created_at->isAfter($tar)){
                $periodOfDay[2]++;
            }

            if($report->created_at->isBefore($end) && $report->created_at->isAfter($noi)){
                $periodOfDay[3]++;
            }
        }

        return view('supervisor.relatorio-um', [
            'periodOfDay' => $periodOfDay,
        ]);
    }

    public function second(Request $request) : View
    {
        Gate::authorize('supervisor-actions', $request->user);

        $today = Carbon::now();
        $last_week = Carbon::now()->subWeeks(1);

        $week_reports = $this->report->whereBetween('created_at', [$last_week, $today])->get();

        $dayOfWeek = array();

        for($i = 0; $i < 7; $i++){
            $dayOfWeek[$i] = 0;
        }

        foreach($week_reports as $report)
        {
            switch($report->created_at->dayOfWeek)
            {
                case 0:
                    $dayOfWeek[0]++;
                    break;
                
                case 1:
                    $dayOfWeek[1]++;
                    break;
                
                case 2:
                    $dayOfWeek[2]++;
                    break;
                
                case 3:
                    $dayOfWeek[3]++;
                    break;
                
                case 4:
                    $dayOfWeek[4]++;
                    break;

                case 5:
                    $dayOfWeek[5]++;
                    break;

                case 6:
                    $dayOfWeek[6]++;
                    break;
            }
        }

        return view('supervisor.relatorio-dois', [
            'dayOfWeek' => $dayOfWeek,
        ]);
    }

    public function third(Request $request) : View
    {
        Gate::authorize('supervisor-actions', $request->user);

        $start = Carbon::now()->startOfYear();
        $end = Carbon::now()->endOfYear();

        $year_reports = $this->report->whereBetween('created_at', [$start, $end])->get();

        $monthsOfYear = array();

        for($i = 0; $i < 12; $i++){
            $monthsOfYear[$i] = 0;
        }

        foreach($year_reports as $report)
        {
            switch($report->created_at->month)
            {
                case 1:
                    $monthsOfYear[0]++;
                    break;
                
                case 2:
                    $monthsOfYear[1]++;
                    break;
                
                case 3:
                    $monthsOfYear[2]++;
                    break;
                
                case 4:
                    $monthsOfYear[3]++;
                    break;
                
                case 5:
                    $monthsOfYear[4]++;
                    break;

                case 6:
                    $monthsOfYear[5]++;
                    break;

                case 7:
                    $monthsOfYear[6]++;
                    break;

                case 8:
                    $monthsOfYear[7]++;
                    break;

                case 9:
                    $monthsOfYear[8]++;
                    break;

                case 10:
                    $monthsOfYear[9]++;
                    break;

                case 11:
                    $monthsOfYear[10]++;
                    break;

                case 12:
                    $monthsOfYear[11]++;
                    break;
            }
        }

        return view('supervisor.relatorio-tres', [
            'monthsOfYear' => $monthsOfYear,
        ]);
    }
}
