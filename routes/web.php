<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('contact', 'contact');

Route::get('register', [RegisteredUserController::class, 'create']);
Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->name('jobs.edit')
    ->middleware('auth')
    ->can('update', 'job');
Route::put('/jobs/{job}', [JobController::class, 'update'])
    ->name('jobs.update')
    ->middleware('auth')
    ->can('update', 'job');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
