<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController,CompanyController,PropertyCategoryController,PropertyController};

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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\PageController::class, 'inicio'])->name('inicio');
Route::get('/inmuebles', [App\Http\Controllers\PageController::class, 'inmuebles'])->name('inmuebles');
Route::get('/conocenos', [App\Http\Controllers\PageController::class, 'conocenos'])->name('conocenos');


Route::get('/admin', function() {
    return view('admin.index');
})->middleware('auth');


// company
Route::resource('admin/company',CompanyController::class)->middleware('auth');
Route::resource('admin/PropertyCategory',PropertyCategoryController::class)->middleware('auth');
Route::resource('admin/property',PropertyController::class)->middleware('auth');
