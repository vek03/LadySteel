<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class DispositivoController extends Controller
{
    private $device;

    function __construct() {
        $this->device = new Dispositivo();
    }

    
    public function list(Request $request) : View
    {
        Gate::authorize('supervisor-actions', $request->user);
        
        $devices = $this->device->has('victim')->get();

        return view('supervisor.dispositivos', [
            'devices' => $devices,
        ]);
    }
}