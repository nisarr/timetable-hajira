<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\ClasseController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('rooms', RoomsController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CoursesController::class);
Route::resource('timeslots', TimeController::class);
Route::resource('classes', ClasseController::class);

Route::get('/timeshow', [App\Http\Controllers\TimeController::class, 'timeshow']);









###################Frontend Routes ###################
Route::resource('/', FrontendController::class);
Route::get('about', [FrontendController::class, 'about']);
Route::get('contact-us', [FrontendController::class, 'contact']);
