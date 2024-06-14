<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use App\Http\Requests\CategorieStore;
use App\Http\Requests\CategorieUpdate;
use App\Models\Image;
use App\Traits\CategorieTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Image as Intervention;


class CategorieController extends Controller
{

    use CategorieTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view(
            'back.categories.index', 
            [
                'categories' => Categorie::orderBy('title')->where('parent',0)->get(), 
            ]
        );
    }





    public function create()
    {
        //$this->authorize('create');
        return view('back.categories.create');
    }

    

    public function store(CategorieStore $request)
    {


        //$validatedData = $request->validated();
        $categorie = Categorie::create($request->all());

        $categorie->partenaires()->sync($request->partenaires);

        $this->saveImageTrait($request->picture,$categorie);


        
        

        return redirect()->route('categories.index');

    }

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('back.categories.edit', ['categorie' => $categorie]);
    }

    public function update(CategorieUpdate $request, $id)
    {

        //dd($request->partenaires);
        $categorie = Categorie::findOrFail($id);

        $validatedData = $request->validated();



        $categorie->partenaires()->sync($request->partenaires);

        $categorie->fill($request->all());
        $categorie->save();

        $this->saveImageTrait($request->picture,$categorie);
       
        $this->saveIconTrait($request->icon,$categorie);

        return redirect()->route('categories.index');
    }

    public function destroy(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();


        return redirect()->route('categories.index');
    }

}
