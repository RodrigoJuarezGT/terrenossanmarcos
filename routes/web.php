<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PageController,CompanyController,PropertyCategoryController,PropertyController,SettingsController};

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


Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/inmuebles', [PageController::class, 'inmuebles'])->name('inmuebles');
Route::get('/conocenos', [PageController::class, 'conocenos'])->name('conocenos');
Route::get('admin/settings', [SettingsController::class, 'settings' ])->middleware('auth');
Route::get('admin/settings/{user}', [SettingsController::class, 'update' ])->name('settings.update')->middleware('auth');


Route::get('/admin', function() {
    return view('admin.index');
})->middleware('auth');


// company
Route::resource('admin/company',CompanyController::class)->middleware('auth');
Route::resource('admin/PropertyCategory',PropertyCategoryController::class)->middleware('auth');
Route::resource('admin/property',PropertyController::class)->middleware('auth')->except('show');
Route::get('/property-{property}-{slug}', [PropertyController::class, 'show'])->name('property');

