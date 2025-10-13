<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*<<<--- admin --->>>*/
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
/* student */
// craete students
Route::get('/create-student', [StudentController::class, 'create'])->name('create-student');
// students list
Route::get('/students-list', [StudentController::class, 'index'])->name('student-list');
// students by jamat
Route::get('/students-by-jamat',[StudentController::class,'studentsByJamat'])->name('students.by.jamaat');
// admission-register-by-jamat
Route::get('/admission-register-by-jamat', [StudentController::class, 'admissionRegisterByJamat'])->name('admission-register-by-jamat');
