<?php

namespace App\Http\Controllers\Admin;

use Response;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LibelleRequest;
use Illuminate\Support\Str;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::with('produits')->get();
        
        return view('back.fournisseurs.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LibelleRequest $request)
    {
        $data = $request->validated();
        $fournisseur = Fournisseur::create($request->all() + ['slug' => Str::slug($request->libelle, '-')]);

        return Response::json([
            'etat' => 'ok',
            'type' => 'add',
            'data' => $fournisseur,
            'count' => Fournisseur::all()->count()
            
        ]);
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
    public function update(LibelleRequest $request, $id)
    {

        $data = $request->validated();

        $fournisseur = Fournisseur::find($id);
        $fournisseur->fill($request->all() + ['slug' => Str::slug($request->libelle, '-')]);
        $fournisseur->save();


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
    public function destroy(Request $request, $id)
    {
        Fournisseur::destroy($id);

        return Response::json([
            'count' => Fournisseur::all()->count()
        ]);
    }
}
