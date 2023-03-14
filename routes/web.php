<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\TransportasiController;
use App\Http\Controllers\TentangController;


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

Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('/armada/{id}', [FrontEndController::class, 'armada'])->name('armada');
Route::get('/transportasi', [TransportasiController::class, 'transportasi'])->name('transportasi');

Route::get('/login', function () {
    return view('backoffice.login.login');
})->name('login');

Route::group(
    [
        'prefix'     => 'login'
    ],
    function () {
        Route::post('/proses', [LoginController::class, 'authenticate'])->name('login.proses');
        Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
    }
);

Route::group(
    [
        'prefix'     => 'backoffice',
        'middleware' => 'auth'
    ],
    function () {
        Route::resource('/akun', AkunController::class);
        Route::get('/profile/{id}', [AkunController::class, 'profile'])->name('akun.profile');
        Route::resource('/armada', ArmadaController::class);
        Route::resource('/tentang', TentangController::class);
    }
);
