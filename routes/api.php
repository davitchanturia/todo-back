<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::get('/todos', [TodoController::class, 'index'])->name('all.todos');
Route::get('/todo/{id}', [TodoController::class, 'todo'])->name('certain.todo');
Route::get('/todos/importants', [TodoController::class, 'importants'])->name('important.todos');
Route::post('/add-todo', [TodoController::class, 'add'])->name('add.todo');

Route::get('/notes', [NoteController::class, 'index'])->name('all.notes');
Route::get('/note/{id}', [NoteController::class, 'note'])->name('certain.note');
Route::post('/add-note', [NoteController::class, 'add'])->name('add.note');
