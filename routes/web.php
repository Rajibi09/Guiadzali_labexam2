<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', fn () => redirect('/tasks'));
Route::resource('tasks', TaskController::class);