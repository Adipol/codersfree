<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('cursos', function () {
    return "Aqui se mostrara la lista de cursos";
})->name('courses.index');

Route::get('cursos/{course}', function ($course) {
    return "Aqui se implmentara la seccion del curso";
})->name('course.show');
