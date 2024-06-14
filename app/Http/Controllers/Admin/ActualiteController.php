<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actualite;
use App\Http\Requests\ActualiteStore;
use App\Http\Requests\ActualiteUpdate;
use App\Models\Image;
use App\Traits\ActualiteTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class ActualiteController extends Controller
{
    use ActualiteTrait;



    public function __construct()
    {
        //$this->middleware('auth')->except('show');
        //$this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view(
            'back.actualites.index', 
            [
                'actualites' => Actualite::orderBy('id','desc')->get(), 
            ]
        );
    }





    public function create()
    {
        // $this->authorize('create');
        return view('back.actualites.create');
    }

    

    public function store(ActualiteStore $request)
    {

        $validatedData = $request->validated();

        $validatedData['partenaire_id'] = $request->partenaire;

        $accueil = 0;
        if($request->accueil)$accueil = 1;
        $validatedData['accueil'] = $accueil;
        
        $actualite = Actualite::create($validatedData);

        $this->saveImageTrait($request->picture,$actualite);

        return redirect()->route('actualites.index');

    }

    public function edit($id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('back.actualites.edit', ['actualite' => $actualite]);
    }

    public function update(ActualiteUpdate $request, $id)
    {
        $actualite = Actualite::findOrFail($id);


        $accueil = 0;
        if($request->accueil)$accueil = 1;
        
        $validatedData = $request->validated();

        $validatedData['partenaire_id'] = $request->partenaire;
        $validatedData['accueil'] = $accueil;
        $actualite->fill($validatedData);
        $actualite->save();

        $this->saveImageTrait($request->picture,$actualite);

        return redirect()->route('actualites.index');
    }

    public function destroy(Request $request, $id)
    {
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();


        return redirect()->route('actualites.index');
    }

    

}
