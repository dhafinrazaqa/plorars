<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionMinatBakat;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/search', function () {
    return view('searchPage');
});

Route::get('/home', function () {
    return view('homePage');
})->name('home');

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

Route::resource('admin/kegiatan', KegiatanController::class);

Route::get('/testMbti',function(){
    return view('test-mbti');
});

Route::get('/testMinatBakat',function(){
    return view('test-minat-bakat');
});

// Generate soal quiz
Route::post('/tampilkan-quiz',[QuestionController::class, 'tampilkanQuiz']);

Route::post('/simpan-hasil',[QuestionController::class, 'simpanHasil']);

Route::post('/tampilkan-quiz-mb',[QuestionMinatBakat::class, 'tampilkanQuiz']);

Route::post('/simpan-hasil-minat-bakat',[QuestionMinatBakat::class, 'simpanHasil']);

Route::post('/login-handler', [AuthController::class, 'login'])->name('login-handler');
Route::post('/register-handler', [AuthController::class, 'register'])->name('register-handler');

// Route::get('/homepage', function () {
//     return view('homepage');
// })->name('homepage');
