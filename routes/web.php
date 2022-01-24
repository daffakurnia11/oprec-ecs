<?php

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/registration', [PagesController::class, 'registration']);
Route::post('/registration', [PagesController::class, 'submittion']);

Route::get('/Announcement', [PagesController::class, 'announcement']);
Route::get('/Announcement/not-eligible', [PagesController::class, 'not_eligible']);
Route::get('/Announcement/{applicant_interview}', [PagesController::class, 'accepted']);
Route::post('/codecheck', [PagesController::class, 'codecheck']);
Route::put('/Announcement/{applicant_interview}', [PagesController::class, 'attendInterview']);
