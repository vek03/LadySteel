<?php

use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DenunciaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//COMUM
Route::middleware('guest')->group(function () {
    Route::get('/home', function () {
        return view('index');
    })->name('index');
       
    Route::get('/fale-conosco', function () {
        return view('fale-conosco');
    })->name('fale-conosco');

    Route::post('/fale-conosco', [ProfileController::class, 'send'])->name('send'); 
    
    Route::get('/sobre', function () {
        return view('sobre');
    })->name('sobre');
});



//FALLBACK
Route::fallback(function () {
    return back();
});



//AUTH
Route::get('/dashboard', function () {
    return view('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



//DISFARCE
Route::get('/', function () {
    return view('disfarce.index');
})->name('disfarce');



//VITIMA
Route::middleware(['auth', 'auth-victim'])->group(function () {
    Route::get('/vitima-perfil', [ProfileController::class, 'showVictim'])->name('vitima.profile'); 

    Route::delete('/vitima-perfil', [ProfileController::class, 'disableVictim'])->name('vitima.disable');

    Route::get('/vitima-edit', [ProfileController::class, 'editVictim'])->name('vitima.edit');

    Route::patch('/vitima-edit', [ProfileController::class, 'updateVictim'])->name('vitima.update');

    Route::get('/vitima-edit-password', function () {
        return view('vitima.edit-password');
    })->name('vitima.edit-password');

    Route::patch('/atendente-denuncias-/{report}', [DenunciaController::class, 'accept'])->name('acatar');
});



//ATENDENTE
Route::middleware(['auth', 'auth-attendant'])->group(function () {
    //View Listar Denúncias Acatadas
    Route::get('/atendente-denuncias-acatadas', [DenunciaController::class, 'indexAcatadas'])->name('atendente.acatadas');

    //View Listar Denúncias Pendentes
    Route::get('/atendente-denuncias-pendentes', [DenunciaController::class, 'indexPendentes'])->name('atendente.pendentes');

    //Acatar Denúncia
    Route::patch('/atendente-denuncias-pendentes/{report}', [DenunciaController::class, 'accept'])->name('atendente.acatar');
});



//SUPERVISOR
Route::middleware(['auth', 'auth-supervisor'])->group(function () {
    //Create
    //View Registrar Atendente
    Route::get('/supervisor-registrar-atendente', [RegisteredUserController::class, 'createAttendant'])->name('supervisor.atendente-register');

    //Form Registrar Atendente
    Route::post('/supervisor-registrar-atendente', [RegisteredUserController::class, 'storeAttendant'])->name('supervisor.atendente-create');

    //READ
    //View Listar Dispositivos
    Route::get('/supervisor-listar-dispositivos', [DispositivoController::class, 'list'])->name('supervisor.dispositivos');

    //View Listar Atendentes
    Route::get('/supervisor-listar-atendentes', [ProfileController::class, 'listAttendants'])->name('supervisor.atendente-list');

    //READ
    //View Perfil Atendente
    Route::get('/supervisor-perfil-atendente/{attendant}', [ProfileController::class, 'showAttendant'])->name('supervisor.atendente-perfil');

    //READ
    //View Perfil Atendente
    Route::get('/supervisor-editar-atendente/{attendant}', [ProfileController::class, 'editAttendant'])->name('supervisor.editar-atendente');

    //UPDATE
    //Form Atualizar Atendente
    Route::patch('/supervisor-editar-atendente/{attendant}', [ProfileController::class, 'updateAttendant'])->name('supervisor.atendente-update');

    //"DELETE"
    Route::delete('/supervisor-perfil-atendente/{attendant}', [ProfileController::class, 'disableAttendant'])->name('supervisor.atendente-disable');

    //Relatórios
    //View I
    Route::get('/supervisor-relatorio-um', [DenunciaController::class, 'first'])->name('supervisor.first');

    //View II
    Route::get('/supervisor-relatorio-dois', [DenunciaController::class, 'second'])->name('supervisor.second');

    //View III
    Route::get('/supervisor-relatorio-tres', [DenunciaController::class, 'third'])->name('supervisor.third');
});



require __DIR__.'/auth.php';
