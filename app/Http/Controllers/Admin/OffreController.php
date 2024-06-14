<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offre;
use App\Http\Requests\OffreStore;
use Illuminate\Http\Request;
use App\Traits\OffreTrait;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class OffreController extends Controller
{
    use OffreTrait;



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
            'back.offres.index', 
            [
                'offres' => Offre::orderBy('id','desc')->get(), 
            ]
        );
    }





    public function create()
    {
        //$this->authorize('create');
        return view('back.offres.create');
    }

    

    public function store(OffreStore $request)
    {

        $validatedData = $request->validated();
        $offre = Offre::create($validatedData);

        $this->saveImageTrait($request->picture,$offre);
        
        return redirect()->route('offres.index');

    }

    public function edit($id)
    {
        $offre = Offre::findOrFail($id);
        return view('back.offres.edit', ['offre' => $offre]);
    }

    public function update(OffreStore $request, $id)
    {
        $offre = Offre::findOrFail($id);

        $validatedData = $request->validated();

        $this->saveImageTrait($request->picture,$offre);

        $offre->fill($validatedData);
        $offre->save();

       
        return redirect()->route('offres.index');
    }

    public function destroy(Request $request, $id)
    {
        $offre = Offre::findOrFail($id);
        $offre->delete();


        return redirect()->route('offres.index');
    }

    

}
