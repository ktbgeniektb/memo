<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\AiInterviewController;

Route::get('/interview', [AiInterviewController::class, 'index']);
Route::get('/interview/chat', [AiInterviewController::class, 'chat']);

Route::get('/', function () {
    return view('welcome');
});
