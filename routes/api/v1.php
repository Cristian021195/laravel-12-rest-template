<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HelloController;

Route::get('/hello', [HelloController::class, 'index']);