<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ServiceController;


//login-register
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;







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
    return view('index');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/service', function () {
    return view('service');
});

Route::get('/acercade', function () {
    return view('acercade');
});


Route::get('/category', [CategoryController::class, 'show']);

Route::get('/services/{category_id}', [CategoryController::class,'servicesByCategory']);

Route::get('/category/{category_id}', [CategoryController::class, 'showService'])->name('show.service');


//login-register
//register
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);


//login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);


//home
Route::get('/home', [HomeController::class, 'index']);

//logout
Route::get('/logout', [LogoutController::class, 'logout']);





//TODO HACERCA DE CATEGORIES

Route::get('/add-category', [CategoryController::class, 'addCategory']);

Route::post('/add-category',[CategoryController::class, 'storeCategory'])->name('category.store');

Route::get('/all-categories', [CategoryController::class, 'categories']);

Route::get('/edit-category/{category_id}', [CategoryController::class, 'editCategory']);

Route::post('/edit-category',[CategoryController::class, 'updateCategory'])->name('category.update');

Route::get('/delete-category/{category_id}', [CategoryController::class, 'deleteCategory']);

//TODO HACERCA DE COLLABORATORS CRUD

Route::get('/add-collaborator', [CollaboratorController::class, 'addCollaborator']);

Route::post('/add-collaborator',[CollaboratorController::class, 'storeCollaborator'])->name('collaborator.store');

Route::get('/add-collaborator',[CollaboratorController::class, 'serviceShowid'])->name('collaborator.store');

Route::get('/all-collaborators', [CollaboratorController::class, 'collaborators']);

Route::get('/edit-collaborator/{collab_id}', [CollaboratorController::class, 'editCollaborator']);

Route::post('/edit-collaborator',[CollaboratorController::class, 'updateCollaborator'])->name('collaborator.update');

Route::get('/delete-collaborator/{collab_id}', [CollaboratorController::class, 'deleteCollaborator']);


//Service trial

Route::get('/service', [ServiceController::class, 'index']);



