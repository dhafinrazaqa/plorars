<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionMinatBakat;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MBTIController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Models\Kegiatan;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/search', [SearchController::class, 'index'])->name('search.index'); // Initial page load
Route::get('/search', [SearchController::class, 'search'])->name('search.search'); // Filtered results


// Route::get('/home', function () {
//     return view('homePage');
// })->name('home');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/profile/mbti', function () {
    return view('/profile/mbti');
});
Route::get('/profile/kegiatan', function () {
    return view('/profile/kegiatan');
});

Route::get('/profile/mbti', [ProfileController::class, 'showMBTI']);
Route::get('/profile/kegiatan', [ProfileController::class, 'showKegiatan']);

Route::resource('admin/kegiatan', KegiatanController::class);

Route::get('/mbti', [MbtiController::class, 'index']);

Route::get('/testMinatBakat', function () {
    return view('test-minat-bakat');
});

// Generate soal quiz
// Route::post('/tampilkan-quiz', [QuestionController::class, 'tampilkanQuiz']);

// Route::post('/simpan-hasil', [QuestionController::class, 'simpanHasil']);

// Route::post('/tampilkan-quiz-mb', [QuestionMinatBakat::class, 'tampilkanQuiz']);

// Route::post('/simpan-hasil-minat-bakat', [QuestionMinatBakat::class, 'simpanHasil']);

Route::post('/login-handler', [AuthController::class, 'login'])->name('login-handler');
Route::post('/register-handler', [AuthController::class, 'register'])->name('register-handler');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    // Route::resource('products', ProductController::class);
    Route::resource('admin/kegiatan', KegiatanController::class);
});

Route::get('/send-test-notification', [NotificationController::class, 'sendNotification']);
Route::get('/kegiatan/{id}', [DetailController::class, 'show'])->name('kegiatan.show');

Route::get('/post', function () {
    return redirect('admin.kegiatan.index');
})->name('posts.show');
