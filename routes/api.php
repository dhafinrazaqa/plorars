<?php

use App\Http\Controllers\MBTIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/mbti/questions', [MBTIController::class, 'getQuestions']);
Route::post('/mbti/results', [MBTIController::class, 'storeResults']);

Auth::routes();
