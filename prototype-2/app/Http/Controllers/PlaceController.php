<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $place= DB::table('places')
       ->select('*')
       ->join('categories','places.id_categorie','=' ,'categories.id_categorie')
       ->get();
       return view('pages.tableau-endroit', compact('place'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie =DB::table('categories')
        ->select('id_categorie','name_categorie')
        ->get();

        return view('pages.inserte-endroit', compact('categorie'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('nom_place');
        $video = $request->input('video_place');
        $description = $request->input('description_place');
        $temperature = $request->input('tumperature_place');
        $id_categorie= $request->input('id_categorie');
      
        if($request->hasfile('photo_place'))
         {
             $file = $request->file('photo_place');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('img', $filename);
            $photo = $filename;
         }
         $inserte = DB::insert('insert into places(nom_place,photo_place,video_place,description_place,tumperature_place,id_categorie) value(?,?,?,?,?,?)',[$nom,$photo,$video,$description,$temperature,$id_categorie]);
         if($inserte){
          return redirect('afficher-endroit');
          
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
