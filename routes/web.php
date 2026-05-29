<?php


use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
Route::redirect('/', '/ideas');

Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
Route::get('/ideas/create', [IdeaController::class, 'create'])->name('ideas.create');
Route::get('/ideas/{idea}',[IdeaController::class, 'show'])->name('ideas.show');
Route::post('/ideas',[IdeaController::class, 'store'])->name('ideas.store');
Route::get('/ideas/{idea}/edit',[IdeaController::class, 'edit'])->name('ideas.edit');
Route::patch('/ideas/{idea}',[IdeaController::class, 'update']);
Route::delete('/ideas/{idea}',[IdeaController::class, 'destroy']);

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionsController::class,'create']);
Route::post('/login',[SessionsController::class,'store']);
Route::delete('/logout',[SessionsController::class,'destroy']);

