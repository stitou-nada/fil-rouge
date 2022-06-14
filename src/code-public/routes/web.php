<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\placesController;
use App\Http\Controllers\tempuratureController;
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

Route::get('/endroits', function (){
    return view('pages.endroits');
});


//  route::get('/index',[placesController::class,'afficher_categories','tempurature']);
//   route::get('/index',[tempuratureController::class,'fetch_API']);


    route::get('/index',[CategorieController::class,'afficher_categories_index']);
    // route::get('/endroit',[CategorieController::class,'afficher_categories_endroit']);
    // route::get('/endroit',[placesController::class,'afficher_categories']);
    route::get('/endroit/{id}',[placesController::class,'afficher_places_id']);
    // route::get('/index',[tempuratureController::class,'fetch_API'])->name('index');



// route::get('/categorie/{id}',[placesController::class,'afficher_categories']);
