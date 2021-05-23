<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;



Route::post('/', [TweetController::class, 'post']);
