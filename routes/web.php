<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home');
});

Route::get('contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);

Route::post('contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');


// Auth::routes();

// Route::middleware('auth')->group(function () {

//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });