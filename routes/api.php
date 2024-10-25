<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TelegramController;


Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->post('/auth/set-bot', [AuthController::class, 'setTelegramBot']);
Route::middleware('auth:api')->post('/send-message', [TelegramController::class, 'sendMessage']);
