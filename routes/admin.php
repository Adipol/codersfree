<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\HomeController;


Route::get('', [HomeController::class, 'index']);
