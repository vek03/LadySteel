<?php

namespace App\Http\Controllers;

use App\Http\Requests\victim\ProfileUpdateRequest;
use App\Http\Requests\attendant\AttendantUpdateRequest;
use App\Mail\fale_conosco;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    private $profile;

    function __construct() {
        $this->profile = new User();
    }


    //VITIMA
    public function showVictim(Request $request): View
    {
        Gate::authorize('victim-actions', $request->user);

        return view('vitima.profile');
    }

    

    public function send(Request $request) : RedirectResponse
    {
        Mail::to('ladysteelmvj@gmail.com', 'LadySteel')->send
        (new fale_conosco([
            'fromName' => $request->input('name'),
            'fromEmail' => $request->input('email'),
            'Message' => $request->input('message'),
        ]));    

        return Redirect::back()->with('status', 'Enviado!');
    }

    /**
     * Display the user's profile form.
     */
    public function editVictim(Request $request): View
    {
        Gate::authorize('victim-actions', $request->user);

        return view('vitima.edit');
    }



    /**
     * Update the user's profile information.
     */
    public function updateVictim(ProfileUpdateRequest $request): RedirectResponse
    {
        Gate::authorize('victim-actions', $request->user);

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        if(!$request->has('img'))
        {
            $contato1 = $request->user()->contacts()->first();
            $contato1->contact = $request->contact;
            $contato1->save();

            $contato2 = $request->user()->contacts()->orderBy('id', 'desc')->first();
            $contato2->contact = $request->contact2;
            $contato2->save();
        }

        $request->user()->refresh();

        return Redirect::back()->with('status', 'Seu perfil foi atualizado com sucesso!');
    }



    /**
     * Disable the user's account.
     */
    public function disableVictim(Request $request): RedirectResponse
    {
        Gate::authorize('victim-actions', $request->user);

        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return Redirect::to('/');
    }

    //ATENDENTE
    public function showAttendant(Request $request, User $attendant): View
    {
        Gate::authorize('supervisor-actions', $request->user);

        Gate::authorize('supervisor-attendant', $attendant);

        return view('supervisor.profile-atendente', [
            'attendant' => $attendant,
        ]);
    }

    public function listAttendants(Request $request): View
    {
        Gate::authorize('supervisor-actions', $request->user);

        $attendants = $this->profile->where(['id_type' => 2, 'id_supervisor' => Auth::user()->id])->get();
        return view('supervisor.listar-atendentes', [
            'attendants' => $attendants,
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function editAttendant(Request $request, User $attendant): View
    {
        Gate::authorize('supervisor-actions', $request->user);

        Gate::authorize('supervisor-attendant', $attendant);

        return view('supervisor.editar-atendente', [
            'attendant' => $attendant,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function updateAttendant(AttendantUpdateRequest $request, User $attendant): RedirectResponse
    {
        Gate::authorize('supervisor-actions', $request->user);

        Gate::authorize('supervisor-attendant', $attendant);

        $attendant->fill($request->validated());

        if ($attendant->isDirty('email')) {
            $attendant->email_verified_at = null;
        }

        $attendant->save();
        
        return Redirect::back()->with('status', 'Perfil atualizado com sucesso!');
    }

    /**
     * Disable the user's account.
     */
    public function disableAttendant(Request $request, User $attendant): RedirectResponse
    {
        Gate::authorize('supervisor-actions', $request->user);

        Gate::authorize('supervisor-attendant', $attendant);
        
        $attendant->delete();
        
        return Redirect::route('supervisor.atendente-list')->with('status', 'Atendente inativado com sucesso!');
    }
}
