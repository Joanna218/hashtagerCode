<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homecontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['as' => 'front.'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/ugc', [HomeController::class, 'ugc'])->name('ugc');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/service', [HomeController::class, 'service'])->name('service');
    Route::get('/apply', [HomeController::class, 'apply'])->name('apply');
});
