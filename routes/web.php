<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\ColegioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ScheduleController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('reservation/save', [ReservationController::class, 'save'])->name('reservation.save');
    Route::post('reservation/save', [ReservationController::class, 'save'])->name('reservation.save');
    Route::post('reservation/save', [ReservationController::class, 'save'])->name('reservation.save');
});

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('admin')->middleware('auth', 'role')->group(function () {
    Route::get('colegio', [ColegioController::class, 'conf'])->name('colegio.conf');
    Route::get('users', [UserController::class, 'all'])->name('users.all');
    Route::get('users/new', [UserController::class, 'create'])->name('users.create');
    Route::post('users/new', [UserController::class, 'save'])->name('users.save');
    Route::get('users/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::patch('users/{id}', [UserController::class, 'passdefault'])->name('users.passdefault');
    Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');
    Route::get('grades', [GradeController::class, 'index'])->name('grades.all');
    Route::get('grades/create', [GradeController::class, 'create'])->name('grades.create');
    Route::post('grades/create', [GradeController::class, 'save'])->name('grades.save');
    Route::get('grades/{id}', [GradeController::class, 'edit'])->name('grades.edit');
    Route::put('grades/{id}', [GradeController::class, 'update'])->name('grades.update');
    Route::delete('grades/{id}', [GradeController::class, 'delete'])->name('grades.delete');
    Route::get('cycles', [ScheduleController::class, 'index'])->name('schedules.all');
    Route::get('cycles/create', [ScheduleController::class, 'create'])->name('schedules.create');
    Route::post('cycles/create', [ScheduleController::class, 'save'])->name('schedules.save');
    Route::get('cycles/{id}', [ScheduleController::class, 'edit'])->name('schedules.edit');
    Route::put('cycles/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
    Route::delete('cycles/{id}', [ScheduleController::class, 'delete'])->name('schedules.delete');
    Route::get('blocks', [BlockController::class, 'index'])->name('blocks.all');
    Route::get('blocks/create', [BlockController::class, 'create'])->name('blocks.create');
    Route::post('blocks/create', [BlockController::class, 'save'])->name('blocks.save');
    Route::get('blocks/{id}', [BlockController::class, 'edit'])->name('blocks.edit');
    Route::put('blocks/{id}', [BlockController::class, 'update'])->name('blocks.update');
    Route::delete('blocks/{id}', [BlockController::class, 'delete'])->name('blocks.delete');
});

require __DIR__.'/auth.php';
