<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MbtiResultController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/mbti/save-result', [MbtiResultController::class, 'storeResult']);

Route::get('/mbti/get-result', [MbtiResultController::class, 'getResult']);