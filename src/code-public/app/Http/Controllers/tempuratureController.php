<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tempuratureController extends Controller
{
    function afficher_places_par_tempuratue($id){
  
        $places = DB::table('places')
        ->select('*')
        ->where("places.tumperature_place",$id)
        ->join("categories","places.id_categorie",'=',"categories.id_categorie")
        ->get();
        return view('pages.categorie',compact("places"));
        }
}
