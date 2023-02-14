<?php

use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

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
// Guest Routes
Route::get('/', function () { return view('welcome'); });
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'doRegisterStudent'])->name('register');
Route::post('/login', [LoginController::class, 'doLogin']);
Route::get('/attesa', function () { return view('auth.attesa'); })->name('attesa');

// Authenticated Routes (Coordinators)
Route::middleware(['auth', 'role:coordinator'])->group(function () {
    Route::get('/home', [CoordinatorController::class, 'index'])->name('coordinator.home');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('welcome');
    })->name('logout');
});

// Authenticated Routes (Students)
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/home', [StudentController::class, 'index'])->name('student.home');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('welcome');
    })->name('logout');
});

// Authenticated Routes (Professors)
Route::middleware(['auth', 'role:professor'])->group(function () {
    Route::get('/home', [ProfessorController::class, 'index'])->name('professor.home');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('welcome');
    })->name('logout');
});

// Authenticated Routes (Administrators)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('welcome');
    })->name('logout');
});
