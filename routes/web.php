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

    Route::group(["prefix" => "grades", "as" => "grades."], function () {
        Route::get('', [GradeController::class, 'index'])->name('all');
        Route::get('create', [GradeController::class, 'create'])->name('create');
        Route::post('store', [GradeController::class, 'store'])->name('store');
        Route::get('{id}', [GradeController::class, 'edit'])->name('edit');
        Route::put('{id}', [GradeController::class, 'update'])->name('update');
        Route::delete('{id}', [GradeController::class, 'destroy'])->name('destroy');
    });

    Route::group(["prefix" => "cycles", "as" => "schedules."], function () {
        Route::get('', [ScheduleController::class, 'index'])->name('all');
        Route::get('create', [ScheduleController::class, 'create'])->name('create');
        Route::post('store', [ScheduleController::class, 'store'])->name('store');
        Route::get('{id}', [ScheduleController::class, 'edit'])->name('edit');
        Route::put('{id}', [ScheduleController::class, 'update'])->name('update');
        Route::delete('{id}', [ScheduleController::class, 'destroy'])->name('destroy');
    });


    Route::group(["prefix" => "blocks", "as" => "blocks."], function () {
        Route::get('', [BlockController::class, 'index'])->name('all');
        Route::get('create', [BlockController::class, 'create'])->name('create');
        Route::post('store', [BlockController::class, 'store'])->name('store');
        Route::get('{id}', [BlockController::class, 'edit'])->name('edit');
        Route::put('{id}', [BlockController::class, 'update'])->name('update');
        Route::delete('{id}', [BlockController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__ . '/auth.php';
