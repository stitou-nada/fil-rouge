<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class placesController extends Controller
{
    

      function afficher_places_id($id){
  
        $categories=  DB::table('categories')
          ->select("*")
          ->get();
         
         
      $places = DB::table('places')
      ->select('*')
      ->where("places.id_categorie",$id)
      ->join("categories","places.id_categorie",'=',"categories.id_categorie")
      ->get();

      return view('pages.endroits',compact("categories","places"));


      }
   
      function afficher_places_gallery($id){

        $galerie = DB::table('galerie')
        ->where("places.id_places",$id)
        ->select('*')
        ->join("places","galerie.id_place",'=',"places.id_places")
        // ->groupBy('places.id_places')
        ->get();
        return view('pages.galeries',compact("galerie"));
      }
    }

    
  
  
    
  

