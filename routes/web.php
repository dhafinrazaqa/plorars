<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/search', function () {
    return view('searchPage');
});

Route::get('/home', function () {
    return view('homePage');
});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/test', function(){
    return view('test');
});

Route::get('/profile/mbti', function(){
    return view('/profile/mbti');
});
Route::get('/profile/kegiatan', function(){
    return view('/profile/kegiatan');
});

Route::get('/register',[RegisteredUserController::class, 'create'])->name('register');
Route::post('/register',[RegisteredUserController::class, 'store']);

require __DIR__.'/auth.php';

