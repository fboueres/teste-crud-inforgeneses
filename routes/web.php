<?php

use App\Http\Controllers\CreateTask;
use App\Http\Controllers\DeleteTask;
use App\Http\Controllers\EditTask;
use App\Http\Controllers\IndexTask;
use App\Http\Controllers\StoreTask;
use App\Http\Controllers\UpdateTask;
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
    return redirect()->route('tasks.index');
});

Route::get('tasks', IndexTask::class)->name('tasks.index');
Route::get('tasks/create', CreateTask::class)->name('tasks.create');
Route::post('tasks', StoreTask::class)->name('tasks.store');
Route::get('tasks/{task:uuid}/edit', EditTask::class)->name('tasks.edit');
Route::put('tasks/{task:uuid}', UpdateTask::class)->name('tasks.update');
Route::delete('tasks/{task:uuid}', DeleteTask::class)->name('tasks.delete');
