<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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
    return redirect('/login-page');
});

Route::get('/dev', function () {
    return view('dev');
});

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/home', function (){
        return view('admin.home');
    });
    Route::get('/new-student', function (){
        return view('admin.new-student');
    });
    Route::get('/about', function (){
        return view('admin.about');
    });
    Route::get('/student-info', function (){
        return view('admin.student-info');
    });
});

Route::prefix('/student')->middleware(['auth','isStudent'])->group(function (){
    Route::get('/home', function (){
        return view('login.subject-info');
    });


    Route::get('/enrolment-form/{courseID}/{semesterID}/{yearID}', function ($courseID,$semesterID,$yearID){
        return view('user.enrolment-form', ['courseID' => $courseID, 'semesterID' => $semesterID, 'yearID' => $yearID]);
    });

    Route::get('/form-pdf/{user}/{year}/{course}/{sem}', [\App\Http\Controllers\PdfController::class, 'pdf'])->name('form.pdf');
});


Route::get('/login-page', function () {
    return view('login.login-page');
})->name('login')->middleware('guest');




Route::post('/admin/logout', [UserController::class, 'logout']);
Route::post('/admin/store', [UserController::class, 'store']);
Route::post('/admin/login-process', [UserController::class, 'login']);
//Route::get('/import-excel', 'ExcelController@showImportForm')->name('import.excel');
//Route::post('/import-excel', 'ExcelController@import')->name('import.excel');

Route::post('/import', 'App\Http\Controllers\ImportController@import')->name('import');




