<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SysController;
use App\Http\Controllers\AuthController;

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

Route::controller(AuthController::class)->group(function(){

    Route::get('login', 'index')->name('login');
    Route::get('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');
    Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');
    Route::post('validate_login', 'validate_login')->name('Auth.validate_login');
    Route::get('index', 'index')->name('index');

});


Route::get('/', [SysController::class, 'index'])->name('index');
Route::get('/search/{name?}', [SysController::class, 'search'])->name('search')->where('name', '[A-Za-z]+');
Route::get('/character/{id}', [SysController::class, 'character'])->name('character');
