<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MBTIController;
use App\Http\Controllers\MinatBakatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login-handler', [AuthController::class, 'login'])->name('login-handler');
Route::post('/register-handler', [AuthController::class, 'register'])->name('register-handler');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/search', [SearchController::class, 'index'])->name('search.index'); // Initial page load
    Route::get('/search', [SearchController::class, 'search'])->name('search.search'); // Filtered results

    Route::get('/test', function () {
        return view('test');
    })->name('test');

    Route::get('/mbti', [MbtiController::class, 'index']);
    Route::get('/minatBakat', [MinatBakatController::class, 'index']);

    Route::get('/profile/mbti', [ProfileController::class, 'showMBTI']);
    Route::get('/profile/minat-bakat', [ProfileController::class, 'showMinatBakat']);
    Route::get('/profile/kegiatan', [ProfileController::class, 'showKegiatan']);

    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/kegiatan', KegiatanController::class);
});

Route::get('/send-test-notification', [NotificationController::class, 'sendNotification']);
Route::get('/kegiatan/{id}', [DetailController::class, 'show'])->name('kegiatan.show');

Route::get('/post', function () {
    return redirect('admin.kegiatan.index');
})->name('posts.show');
