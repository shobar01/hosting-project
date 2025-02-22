<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('tabel', [HomeController::class, 'tabel'])->name('tabel');
    Route::post('/logout', function () {
        Auth::logout(); // Log the user out
        return redirect()->route('loginApp')->with('success', 'You have been logged out.');
    })->name('logout');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/loginApp', 'setlogin')->name('loginApp');
});

Auth::routes();
