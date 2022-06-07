<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DepartmentController;

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
Route::resource('departments', DepartmentController::class)->middleware('auth');
Route::resource('teachers', TeacherController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('courses', CoursesController::class)->middleware('auth');
Route::resource('timeslots', TimeController::class)->middleware('auth');
Route::resource('classes', ClasseController::class)->middleware('auth');

Route::get('/timeshow', [App\Http\Controllers\TimeController::class, 'timeshow']);



Route::get('teacher/dashboard', [\App\Http\Controllers\Teacher\HomeController::class,'index'])->middleware('auth');
Route::get('teacher/timeshow', [\App\Http\Controllers\Teacher\TimeController::class,'index'])->middleware('auth');

Route::get('student/dashboard', [\App\Http\Controllers\Student\HomeController::class,'index'])->middleware('auth');
Route::get('student/timeshow', [\App\Http\Controllers\Student\TimeController::class,'index'])->middleware('auth');


Route::get('factory',function(){
    User::factory()->count(40)->create();
});



###################Frontend Routes ###################
Route::resource('/', FrontendController::class);
Route::get('about', [FrontendController::class, 'about']);
Route::get('contact-us', [FrontendController::class, 'contact']);
