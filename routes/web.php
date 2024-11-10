<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/dashboard|admin', function(){
    return view('dashboard-admin');
});

Route::get('/testMbti',function(){
    return view('test-mbti');
});

Route::get('/testMinatBakat',function(){
    return view('test-minat-bakat');
});

require __DIR__.'/auth.php'; 


Route::get('/login-register', function () {
    return view('auth.login-register');
})->name('login-register')->middleware('guest');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


