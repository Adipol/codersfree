<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');

Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('couses/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');
Route::get('course-status/{course}', function ($course) {
    return "Aqui vas a poder llevar el control de tu avance";
})->name('course.status');
