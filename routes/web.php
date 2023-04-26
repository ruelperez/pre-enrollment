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
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/home', function (){
        return view('admin.home');
    });

    //Route::get('/live-result/{porID}', [\App\Http\Controllers\Score_resultController::class, 'getData']);
});

Route::get('/admin/login', function () {
    return view('user.login');
})->name('login')->middleware('guest');

Route::get('/admin/register', function () {
    return view('user.register');
});

Route::get('/subject-info', function () {
    return view('student.subject-info');
});

Route::get('/pre-reg', function () {
    return view('student.pre-reg');
});


Route::post('/admin/logout', [UserController::class, 'logout']);
Route::post('/admin/store', [UserController::class, 'store']);
Route::post('/admin/login-process', [\App\Http\Controllers\StudentController::class, 'login']);



