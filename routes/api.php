<?php

use App\Http\Controllers\PostbackController;
use Illuminate\Support\Facades\Route;

Route::get('/getNumber', [PostbackController::class, 'getNumber']);
Route::get('/getSms', [PostbackController::class, 'getSms']);
Route::get('/cancelNumber', [PostbackController::class, 'cancelNumber']);
Route::get('/getStatus', [PostbackController::class, 'getStatus']);
