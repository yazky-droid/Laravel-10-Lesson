<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resources
Route::resource('/posts', PostController::class);