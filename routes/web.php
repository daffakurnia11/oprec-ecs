<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseMemberController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
  Route::get('/signin', [AuthController::class, 'signin'])->name('login');
  Route::post('/signin', [AuthController::class, 'authenticate']);
  Route::get('/register', [AuthController::class, 'register']);
  Route::post('/register', [AuthController::class, 'registration']);
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [AuthController::class, 'logout']);
  Route::get('/', [PagesController::class, 'index']);
  Route::get('/profil', [PagesController::class, 'profile']);
  Route::post('/profil/{user}', [PagesController::class, 'profile_update']);

  Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    // Route::resource('course', CourseController::class);
    Route::prefix('{course:slug}')->group(function () {
      Route::get('/pendaftar', [CourseController::class, 'member']);
    });
  });

  Route::prefix('{course:slug}')->group(function () {
    Route::get('/registrasi', [CourseMemberController::class, 'register']);
    Route::post('/', [CourseMemberController::class, 'submit']);
    Route::get('/', [CourseMemberController::class, 'index'])->middleware('membercheck');
  });
});
