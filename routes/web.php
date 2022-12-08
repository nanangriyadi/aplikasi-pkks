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
    return view('home', [
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=> "About"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio', [
        "title"=> "Portofolio"
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "title"=> "Team"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title"=> "Contact"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title"=> "Login"
    ]);
});

Route::get('/home1', function () {
    return view('home1', [
        "title"=> "home"
    ]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
