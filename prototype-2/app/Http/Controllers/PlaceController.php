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
        return view('pages.inserte-endroit');
        
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
      
      
        if($request->hasfile('photo_place'))
         {
             $file = $request->file('photo_place');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('img', $filename);
            $photo = $filename;
         }
         $inserte = DB::insert('insert into places(nom_place,photo_place) value(?,?)',[$nom,$photo]);
         if($inserte){
          return redirect('afficher-categorie');
          
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
