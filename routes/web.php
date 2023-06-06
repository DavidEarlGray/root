<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\addController; 
use App\Http\Controllers\insertstudController; 
use App\Http\Controllers\homeController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Posts endpoint

Route::get('/show', [showController::class, 'index']);   
Route::get('/list', [showController::class, 'listare']);   
Route::get('/insert',[addController::class, 'insert']);
Route::post('catAdd',[addController::class, 'cat']);
Route::post('teachAdd',[addController::class, 'teach']);
Route::post('schoolAdd',[addController::class, 'school']);
Route::post('matAdd',[addController::class, 'mat']);
Route::post('projAdd',[addController::class, 'project']);
Route::post('school', [ShowController::class, 'showSchool'])->name('controller.method');
Route::get('/posts/{id}', [ShowController::class, 'showSchool']);
Route::get('/school', [ShowController::class, 'Scl']);




Route::post('create',[insertstudController::class, 'insert']);

Route::get('home',[homeController::class, 'loadhome']);