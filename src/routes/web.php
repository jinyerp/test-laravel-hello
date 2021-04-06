<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use Jiny\Hello\Http\Controllers\HelloController;
Route::get('/hello', [HelloController::class, "index"])->name('hello');
Route::post('/hello', [HelloController::class, "send"])->name('hello.send');
