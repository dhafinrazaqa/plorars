<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionMinatBakat;

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

// generate soal quiz

Route::post('/tampilkan-quiz',[QuestionController::class, 'tampilkanQuiz']);
Route::post('/simpan-hasil',[QuestionController::class, 'simpanHasil']);

Route::post('/tampilkan-quiz-mb',[QuestionMinatBakat::class, 'tampilkanQuiz']);
Route::post('/simpan-hasil-minat-bakat',[QuestionMinatBakat::class, 'simpanHasil']);

//register & login

Route::get('/login-register', function () {
    return view('auth.login-register');
})->name('login-register')->middleware('guest');



