<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class placesController extends Controller
{
    

    function afficher_categories(){

        $categories=  DB::table('categories')
          ->select("*")
          ->get();
        
          return view("pages.index",compact("categories"));
      }
  
      function afficher_places_id($id){
  
      $places = DB::table('places')
      ->select('*')
      ->where("places.id_categorie",$id)
      ->join("categories","places.id_categorie",'=',"categories.id_categorie")
      ->get();

      $data =Http::get("https://api.openweathermap.org/data/2.5/weather?q=TANGER&appid=0bd0cd1e7d8ab7a578a5a4d28a57d45b")->json();
        
    
      
      
         $name = $data['name'];
         $wind=$data['wind']['speed'];
      
      
      return view('pages.categorie',[
        "name"=>$data['name'] ,
        "name"=>$data['wind']['speed'] ,
        "places"=>$places
      ]);

    

    

      }

      
    
  
    
  
  
    
  
}
