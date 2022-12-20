<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SysController;

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

Route::get('/{offset?}', [SysController::class, 'index'])->name('index')->where('offset', '[0-9]+');
Route::get('/heroes/{name?}', [SysController::class, 'search'])->name('search')->where('name', '[A-Za-z]+');
