<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    
    function afficher_categories_index(){

        $categories=  DB::table('categories')
          ->select("*")
          ->get();
         
          return view("pages.index",compact("categories"));
      }
    function afficher_categories_endroit(){

        $categories=  DB::table('categories')
          ->select("*")
          ->get();
         
          return view("pages.endroits",compact("categories"));
      }
    function afficher_categories_gallery(){

        $categories=  DB::table('categories')
          ->select("*")
          ->get();
         
          return view("pages.galeries",compact("categories"));
      }
}
