<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionOptionsController;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/level', function () {
    return view('level.level', [
        "title" => "Level",
    ]);
});

Route::get('/viewAccount', function () {
    return view('viewAccount', [
        "title" => "View Account",
    ]);
});

Route::get('/updateAccount', function () {
    return view('updateAccount', [
        "title" => "Update Account",
    ]);
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Route::get('/create', QuestionController::class)->middleware('auth');
Route::resource('/questions', QuestionController::class)->middleware('auth');

Route::resource('/questionsOptions', QuestionOptionsController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/loginStudent', [LoginController::class, 'loginStudent'])->name('loginStudent')->middleware('guest');
Route::post('/loginStudent', [LoginController::class, 'authenticateStudent']);

Route::get('/registerStudent', [RegisterController::class, 'registerStudent'])->middleware('guest');
Route::post('/registerStudent', [RegisterController::class, 'storeStudent']);