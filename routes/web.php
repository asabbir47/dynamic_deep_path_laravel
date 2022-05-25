<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/cats', [CategoryController::class, 'index'])->name('cats');
Route::get('/{slug}/{h}', [CategoryController::class,'parent'])->where('slug', '.+')->name('categoryparent');
Route::get('/slug/h', [CategoryController::class,'hola'])->name('categoryparent1');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');