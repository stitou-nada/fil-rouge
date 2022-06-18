<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CategorieController extends Controller
{
    
    function afficher_categories_index(){

      $categories=  DB::table('categories')
        ->select("*")
        
        ->get();
      $data =Http::get("https://api.openweathermap.org/data/2.5/weather?q=TANGER&appid=0bd0cd1e7d8ab7a578a5a4d28a57d45b&units=metric")->json();
      
     
     
      // api.openweathermap.org/data/2.5/forecast?q=tanger&appid=0bd0cd1e7d8ab7a578a5a4d28a57d45b
      return view("pages.index",

      [
        'categories'=>$categories,
        'temp'=>$data['main']['temp'],
        'description'=>$data['weather'],
        "name" =>$data['name'],
        "wind"=>$data['wind']['speed']
        ]
        
        
      );
      
         
         
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
