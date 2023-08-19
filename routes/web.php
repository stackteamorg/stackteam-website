<?php

use App\Http\Controllers\About;
use App\Http\Controllers\CollaborativeProcess;
use App\Http\Controllers\Brief;
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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/about',About::class)->name('about');
Route::get('/process',CollaborativeProcess::class)->name('process');
Route::get('/brief',Brief::class)->name('brief');
