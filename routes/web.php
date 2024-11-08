<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/homePage', function () {
    return view('homePage');
});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/register',[RegisteredUserController::class, 'create'])->name('register');
Route::post('/register',[RegisteredUserController::class, 'store']);

require __DIR__.'/auth.php';

