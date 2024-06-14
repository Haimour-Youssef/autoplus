<?php

namespace App\Http\Controllers\Admin;

use Response;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LibelleRequest;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametres = Parametre::all();
        
        return view('back.parametres.parametres', compact('parametres'));
    }

        public function store(Request $request)
    {
       $parametre = Parametre::create($request->all());

        return Response::json([
            'etat' => 'ok',
            'type' => 'add',
            'data' => $parametre,
            'count' => Parametre::all()->count()
            
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $parametre = Parametre::find($id);
        $parametre->valeur = $request->input('valeur');
        $parametre->save();


        return Response::json([
            'etat' => 'ok',
            'type' => 'update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
