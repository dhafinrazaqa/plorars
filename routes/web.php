<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionMinatBakat;
use App\Http\Controllers\KegiatanController;

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

// Route::get('/admin/kegiatan', function(){
//     return view('admin/kegiatan/index');
// });
// Route::get('/admin/kegiatan/tambah-kegiatan', function(){
//     return view('admin/kegiatan/create');
// });

Route::resource('admin/kegiatan', KegiatanController::class);

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



