<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use Database\Factories\CategoriesFactory;
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

Route::get('/aa', function () {

    
    return view('pages.principal');
    });


    route::get('/admin',Controller::class,"index");
   
// Route::resource('admin', CategorieController::clsass);

