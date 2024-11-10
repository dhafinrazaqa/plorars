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

Route::get('/profile/mbti', function(){
    return view('/profile/mbti');
});
Route::get('/profile/kegiatan', function(){
    return view('/profile/kegiatan');
});

// Route::get('/register',[RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register',[RegisteredUserController::class, 'store']);

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

// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);


