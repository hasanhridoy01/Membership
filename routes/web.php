<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', 'App\Http\Controllers\Auth\RegisterController@showAllUsers');
Route::get('/dashboard', 'App\Http\Controllers\Auth\RegisterController@showDashboard');
Route::resource('role', 'App\Http\Controllers\RoleController');
Route::resource('user', 'App\Http\Controllers\UserController');

// Admin Route
Route::get('admin', 'App\Http\Controllers\AdminAuthController@LoginPage');
Route::post('admin', 'App\Http\Controllers\AdminAuthController@login') -> name('admin.login');
Route::get('admin-register', 'App\Http\Controllers\AdminAuthController@RegisterPage');
Route::post('admin-register', 'App\Http\Controllers\AdminAuthController@RegisterAdmin');

// Student Route
Route::get('student', 'App\Http\Controllers\StudentAuthController@LoginPage') -> name('student.login');
Route::post('student', 'App\Http\Controllers\StudentAuthController@Login') -> name('student.login');
Route::get('student-register', 'App\Http\Controllers\StudentAuthController@RegisterPage') -> name('student.register');
Route::post('student-register', 'App\Http\Controllers\StudentAuthController@RegisterStudent') -> name('student.register');

// Teacher Route
Route::get('teacher', 'App\Http\Controllers\TeacherAuthController@LoginPage') -> name('teacher.login');
Route::post('teacher', 'App\Http\Controllers\TeacherAuthController@Login') -> name('teacher.login');
Route::get('teacher-register', 'App\Http\Controllers\TeacherAuthController@RegisterPage') -> name('teacher.register');
Route::post('teacher-register', 'App\Http\Controllers\TeacherAuthController@RegisterTeacher') -> name('teacher.register');

//Staff Route
Route::get('staff', 'App\Http\Controllers\StaffAuthController@LoginPage') -> name('staff.login');
Route::post('staff', 'App\Http\Controllers\StaffAuthController@Login') -> name('staff.login');
Route::get('staff-register', 'App\Http\Controllers\StaffAuthController@LoginRegister') -> name('staff.register');
Route::post('staff-register', 'App\Http\Controllers\StaffAuthController@RegisterStaff') -> name('staff.register');
