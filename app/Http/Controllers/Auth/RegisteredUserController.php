<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\attendant\AttendantCreateRequest;
use App\Http\Requests\victim\VictimCreateRequest;
use App\Models\User;
use App\Models\Contato;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    private $profile;

    function __construct() {
        $this->profile = new User();
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function createAttendant(Request $request): View
    {
        Gate::authorize('supervisor-actions', $request->user);

        return view('supervisor.registrar-atendente');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(VictimCreateRequest $request): RedirectResponse
    {
        $user = $this->profile->create([
            'id_device' => $request->id_device,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
            'message' => $request->message,
        ]);

        $user->contacts()->saveMany([
            new Contato(['contact' => $request->contact]),
            new Contato(['contact' => $request->contact2]),
        ]);

        $user->refresh();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function storeAttendant(AttendantCreateRequest $request): RedirectResponse
    {
        Gate::authorize('supervisor-actions', $request->user);

        $user = $this->profile->create([
            'id_type' => 2,
            'id_supervisor' => Auth::user()->id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::LIST_ATENDENTE)->with('status', 'Atendente cadastrado com sucesso!');
    }
}