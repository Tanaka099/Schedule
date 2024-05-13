<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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
Route::get('/', function() {return view('schedules.index');});
Route::get('/', [ScheduleController::class, 'index'])->name('index')->middleware('auth');
Route::get('/schedules/create', [ScheduleController::class, 'create']);
Route::get('/schedules/{schedule}', [ScheduleController::class ,'show']);
Route::post('/schedules', [ScheduleController::class, 'store']);
Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ScheduleController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/schedules', 'store')->name('store');
    Route::get('/schedules/create', 'create')->name('create');
    Route::get('/schedules/{schedule}', 'show')->name('show');
    Route::put('/schedules/{schedule}', 'update')->name('update');
    Route::delete('/schedules/{schedule}', 'delete')->name('delete');
    Route::get('/schedules/{schedule}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
