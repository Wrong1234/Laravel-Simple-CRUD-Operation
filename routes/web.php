<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}/update', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}/delete', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/projects/{id}/show', [ProjectController::class, 'show'])->name('project.show');



