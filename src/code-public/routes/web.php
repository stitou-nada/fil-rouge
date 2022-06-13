<?php

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

// Route::get('/index', function (){
//     return view('pages.index');
// });


//  route::get('/index',[placesController::class,'afficher_categories','tempurature']);
//   route::get('/index',[tempuratureController::class,'fetch_API']);


    route::get('/indexx',[placesController::class,'afficher_categories'])->name('index');
    route::get('/index',[tempuratureController::class,'fetch_API'])->name('index');



// route::get('/categorie/{id}',[placesController::class,'afficher_categories']);
