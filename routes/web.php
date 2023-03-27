<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollaboratorController;


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

Route::get('/add-category', [CategoryController::class, 'addCategory']);

Route::post('/add-category',[CategoryController::class, 'storeCategory'])->name('category.store');

Route::get('/all-categories', [CategoryController::class, 'categories']);

Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory']);

Route::post('/edit-category',[CategoryController::class, 'updateCategory'])->name('category.update');

Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);

Route::get('/add-collaborator', [CollaboratorController::class, 'addCollaborator']);

Route::post('/add-collaborator',[CollaboratorController::class, 'storeCollaborator'])->name('collaborator.store');

Route::get('/all-collaborators', [CollaboratorController::class, 'collaborators']);

Route::get('/edit-collaborator/{id}', [CollaboratorController::class, 'editCollaborator']);

Route::post('/edit-collaborator',[CollaboratorController::class, 'updateCollaborator'])->name('collaborator.update');

Route::get('/delete-collaborator/{id}', [CollaboratorController::class, 'deleteCollaborator']);