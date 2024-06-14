<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partenaire;
use App\Http\Requests\PartenaireStore;
use App\Http\Requests\PartenaireUpdate;
use App\Models\Image;
use App\Traits\PartenaireTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Image as Intervention;

class PartenaireController extends Controller
{

    use PartenaireTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view(
            'back.partenaires.index', 
            [
                'partenaires' => Partenaire::orderBy('id','desc')->get()
            ]
        );
    }





    public function create()
    {
        //$this->authorize('create');
        return view('back.partenaires.create');
    }

    

    public function store(PartenaireStore $request)
    {

        $validatedData = $request->validated();
        $partenaire = Partenaire::create($validatedData);

        $this->saveImageTrait($request->picture,$partenaire);

        return redirect()->route('partenaires.index');

    }

    public function edit($id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view('back.partenaires.edit', ['partenaire' => $partenaire]);
    }

    public function update(PartenaireUpdate $request, $id)
    {
        $partenaire = Partenaire::findOrFail($id);


        $validatedData = $request->validated();

        $partenaire->fill($validatedData);
        $partenaire->save();

        $this->saveImageTrait($request->picture,$partenaire);


        return redirect()->route('partenaires.index');
    }

    public function destroy(Request $request, $id)
    {
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->delete();


        return redirect()->route('partenaires.index');
    }

}
