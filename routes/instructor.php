<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CourseCurriculum;
use App\Http\Livewire\Instructor\CoursesStudents;

Route::redirect('', 'instructor/courses');

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CourseCurriculum::class)->name('courses.curriculum');

Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');

Route::get('courses/{course}/students', CoursesStudents::class)->name('courses.students');
