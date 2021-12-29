<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [SliderController::class, 'Dashboard']);
Route::get('/sliders', [SliderController::class, 'ViewSlider']);
Route::get('/add', [SliderController::class, 'AddSlider']);
Route::post('/add', [SliderController::class, 'store']);
Route::get('/sliders/edit/{id}', [SliderController::class, 'EditSlider']);
Route::put('/sliders/update/{id}', [SliderController::class, 'UpdateSlider']);
Route::get('/sliders/delete/{id}', [SliderController::class, 'destroy']);

// Ccategory Route

Route::get('/services/categories', [CategoryController::class,'categories']);
Route::get('/services/categories/add-category', [CategoryController::class,'AddCategory']);
Route::post('/services/categories/add-category', [CategoryController::class,'store']);
Route::get('/services/categories/edit-category/{id}', [CategoryController::class,'edit']);
Route::put('/services/categories/update-category/{id}', [CategoryController::class,'update']);
Route::get('/services/categories/delete-category/{id}', [CategoryController::class,'destroy']);


// Services Route

Route::get('/services', [ServiceController::class,'Services']);
Route::get('/services/add-service', [ServiceController::class,'AddService']);
Route::post('/services/add-service', [ServiceController::class,'store']);
Route::get('/services/edit-service/{id}', [ServiceController::class,'edit']);
Route::put('/services/update-service/{id}', [ServiceController::class,'update']);
Route::get('/services/delete-service/{id}', [ServiceController::class,'destroy']);



// Contact Route

Route::get('/contact', [ContactController::class, 'Contact']);
Route::get('/contact/edit-contact/{id}', [ContactController::class, 'edit']);
Route::put('/contact/update-contact/{id}', [ContactController::class, 'update']);
Route::get('/contact/delete-contact/{id}', [ContactController::class, 'destroy']);


// Setting Route

Route::get('/edit-setting', [SettingController::class, 'edit']);
Route::post('/update-setting', [SettingController::class, 'update']);
// Route::post('/setting', [SettingController::class, 'store']);
// Route::get('/edit-setting{$id}', [SettingController::class, 'edit']);

