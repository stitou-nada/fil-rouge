<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class tempuratureController extends Controller
{
    // function afficher_places_par_tempuratue($id){
  
    //     $places = DB::table('places')
    //     ->select('*')
    //     ->where("places.tumperature_place",$id)
    //     ->join("categories","places.id_categorie",'=',"categories.id_categorie")
    //     ->get();
    //     return view('pages.categorie',compact("places"));
    //  }


        function fetch_API(){
            $data =Http::get("https://api.openweathermap.org/data/2.5/weather?q=TANGER&appid=0bd0cd1e7d8ab7a578a5a4d28a57d45b&units=metric")->json();
            // api.openweathermap.org/data/2.5/forecast?q=tanger&appid=0bd0cd1e7d8ab7a578a5a4d28a57d45b
            return view("pages.index",
            [
                'temp'=>$data['main']['tomp'],
               "name" =>$data['name'],
               "wind"=>$data['wind']['speed']
            ]
         

            );
         }
}