<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('layout');
});
Route::get('/foto', function () {
    return view('foto.foto');
});
Route::get('/prestasi', function () {
    return view('prestasi.prestasi');
});
Route::get('/berita', function () {
    return view('berita.berita');
});
Route::get('/detail', function () {
    return view('berita.detail');
});
Route::get('/readaton', function () {
    return view('berita.readaton');
});
Route::get('/smartren', function () {
    return view('berita.smartren');
});


Route::resource('/students',StudentController::class);

Route::resource('/teachers',TeacherController::class);

Route::resource('/courses',CourseController::class);

Route::resource('/batches',BatchController::class);

Route::resource('/enrollments',EnrollmentController::class);

Route::resource('/payments',PaymentController::class);

Route::get('/sesi',[SessionController::class, 'index']);
Route::get('/sesi/logout',[SessionController::class, 'logout']);
Route::post('/sesi/login',[SessionController::class, 'login']);