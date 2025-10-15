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
Route::get('/create-student', [StudentController::class, 'create'])
    ->name('create-student');
// students list
Route::get('/students-list', [StudentController::class, 'index'])
    ->name('student-list');
// students by jamat
Route::get('/students-by-jamat', [StudentController::class, 'studentsByJamat'])
    ->name('students.by.jamaat');
// admission-report-by-jamat
Route::get('/admission-report-by-jamat', [StudentController::class, 'admissionReportByJamat'])
    ->name('admission-report-by-jamat');
// admission-register-by-jamat
Route::get('/admission-register-by-jamat', [StudentController::class, 'admissionRegisterByJamat'])
    ->name('admission-register-by-jamat');
// students-list-by-bloodgroup
Route::get('/students-list-by-bloodgroup', [StudentController::class, 'studentsListByBloodGroup'])
    ->name('students-list-by-bloodgroup');
// parents-number-by-jamat
Route::get('parents-number-by-jamat', [StudentController::class, 'parentsNumberByJamat'])
    ->name('parents-number-by-jamat');
// students-deposit-entry-system
Route::get('students-deposit-entry-system', [StudentController::class, 'studentsDepositEntrySystem'])
    ->name('students-deposit-entry-system');
// students-deposit-list
Route::get('students-deposit-list', [StudentController::class, 'studentsDepositList'])
    ->name('students-deposit-list');
// students-deposit-register
Route::get('students-deposit-register', [StudentController::class, 'studentsDepositRegister'])
    ->name('students-deposit-register');