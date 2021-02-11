<?php

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
    return view('home');
});

Route::get('programs-services/how-we-help', function(){
    return view('how-we-help');
})->name('how-we-help');

Route::get('get-involved/donate', function(){
    return view('donate');
})->name('donate');

Route::get('get-involved/volunteer', function(){
    return view('volunteer');
})->name('volunteer');

Route::get('get-involved/newsletter', function(){
    return view('newsletter');
})->name('newsletter');

Route::get('our-research/articles', function(){
    return view('articles');
})->name('articles');

Route::get('our-research/whitepaper', function(){
    return view('whitepaper');
})->name('whitepaper');

Route::get('our-research/blog', function(){
    return view('blog');
})->name('blog');

Route::get('our-research/focus-groups', function(){
    return view('focus-groups');
})->name('focus-groups');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::get('about-us/who-we-are', function(){
    return view('who-we-are');
})->name('who-we-are');

Route::get('about-us/our-team', function(){
    return view('our-team');
})->name('our-team');

Route::get('about-us/newsroom', function(){
    return view('newsroom');
})->name('newsroom');

Route::get('about-us/faqs', function(){
    return view('faqs');
})->name('faqs');

Route::get('subscribe', [App\Http\Controllers\NewsletterController::class, 'store'])->name('subscribe');

Auth::routes();

Route::middleware('auth')->group(function(){
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

