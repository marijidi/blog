<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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