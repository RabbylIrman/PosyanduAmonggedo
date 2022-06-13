<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
});
Auth::routes([
    //ubah register menjadi false untuk menambah admin baru
    'register' => true,
]);


Route::group(['middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    //public
    Route::get('/', [App\Http\Controllers\PublicController::class, 'index'])->name('user.index');
    Route::get('/balita', [App\Http\Controllers\PublicController::class, 'balita'])->name('balita');
    Route::get('/bumil', [App\Http\Controllers\PublicController::class, 'bumil'])->name('bumil');
});

Route::group(['middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {

    Route::get('/balita', [App\Http\Livewire\Balita::class, 'index'])->name('balita.index');
    Route::get('/bumil', [App\Http\Livewire\Bumil::class, 'index'])->name('bumil.index');
    //dashboard
    Route::get('/home/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home.dashboard');

    //gizi balita
    Route::get('/home/balita', [App\Http\Controllers\BalitaController::class, 'index'])->name('balita.index');
    Route::get('/home/balita/add', [App\Http\Controllers\BalitaController::class, 'create'])->name('create');
    Route::post('/home/balita', [App\Http\Controllers\BalitaController::class, 'store'])->name('store');
    Route::get('/home/balita/edit/{id}', [App\Http\Controllers\BalitaController::class, 'edit'])->name('edit');
    Route::put('/home/balita/{id}', [App\Http\Controllers\BalitaController::class, 'update'])->name('update');
    Route::get('/home/balita/delete/{id}', [App\Http\Controllers\BalitaController::class, 'destroy'])->name('destroy');

    //ibu hamil
    Route::get('/home/bumil', [App\Http\Controllers\BumilController::class, 'index'])->name('index');
    Route::get('/home/bumil/add', [App\Http\Controllers\BumilController::class, 'create'])->name('create');
    Route::post('/home/bumil', [App\Http\Controllers\BumilController::class, 'store'])->name('store');
    Route::get('/home/bumil/edit/{id}', [App\Http\Controllers\BumilController::class, 'edit'])->name('edit');
    Route::put('/home/bumil/{id}', [App\Http\Controllers\BumilController::class, 'update'])->name('update');
    Route::get('/home/bumil/delete/{id}', [App\Http\Controllers\BumilController::class, 'destroy'])->name('destroy');

    //members
    Route::get('/home/kader', [App\Http\Controllers\MemberController::class, 'index'])->name('index');
    Route::get('/home/kader/add', [App\Http\Controllers\MemberController::class, 'create'])->name('create');
    Route::post('/home/kader', [App\Http\Controllers\MemberController::class, 'store'])->name('store');
    Route::get('/home/kader/show/{id}', [App\Http\Controllers\MemberController::class, 'show'])->name('show');
    Route::get('/home/kader/edit/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('edit');
    Route::put('/home/kader/{id}', [App\Http\Controllers\MemberController::class, 'update'])->name('update');
    Route::get('/home/kader/delete/{id}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('destroy');

    //keluarga
    Route::get('/home/keluarga', [App\Http\Controllers\KeluargaController::class, 'index'])->name('index');
    Route::get('/home/keluarga/add', [App\Http\Controllers\KeluargaController::class, 'create'])->name('create');
    Route::post('/home/keluarga', [App\Http\Controllers\KeluargaController::class, 'store'])->name('store');
    Route::get('/home/keluarga/show/{id}', [App\Http\Controllers\KeluargaController::class, 'show'])->name('show');
    Route::get('/home/keluarga/edit/{id}', [App\Http\Controllers\KeluargaController::class, 'edit'])->name('edit');
    Route::put('/home/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'update'])->name('update');
    Route::get('/home/keluarga/delete/{id}', [App\Http\Controllers\KeluargaController::class, 'destroy'])->name('destroy');
    Route::get('/home/keluarga/password/{id}', [App\Http\Controllers\KeluargaController::class, 'password'])->name('password');
    Route::patch('/home/keluarga/password', [App\Http\Controllers\KeluargaController::class, 'passwordUpdate'])->name('keluarga.profile.update');

    //returns
    Route::get('/home/returns', [App\Http\Controllers\ReturnController::class, 'index'])->name('index');
    Route::get('/home/return/show/{id}', [App\Http\Controllers\ReturnController::class, 'show'])->name('show');
    Route::get('/home/returns/print_returns', [App\Http\Controllers\ReturnController::class, 'print_returns'])->name('print_returns');

    //profile
    Route::get('/home/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/home/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit');
    Route::patch('/home/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('admin.profile.update');
});
