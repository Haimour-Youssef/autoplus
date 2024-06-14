<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banniere;
use App\Http\Requests\BanniereStore;
use App\Http\Requests\BanniereUpdate;
use App\Models\Image;
use App\Traits\BanniereTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Image as Intervention;

class BanniereController extends Controller
{
     use BanniereTrait;



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view(
            'back.bannieres.index', 
            [
                'bannieres' => Banniere::orderBy('id','desc')->get(), 
            ]
        );
    }





    public function create()
    {
        //$this->authorize('create');
        return view('back.bannieres.create');
    }

    

    public function store(Request $request)
    {

        //$validatedData = $request->validated();
        $banniere = Banniere::create($request->all());


        $this->saveImageTrait($request->picture,$banniere);

        return redirect()->route('bannieres.index');

    }

    public function edit($id)
    {
        $banniere = Banniere::findOrFail($id);
        return view('back.bannieres.edit', ['banniere' => $banniere]);
    }

    public function update(Request $request, $id)
    {
        $banniere = Banniere::findOrFail($id);

        //$validatedData = $request->validated();

        $banniere->fill($request->all());
        $banniere->save();

        $this->saveImageTrait($request->picture,$banniere);

        return redirect()->route('bannieres.index');
    }

    public function destroy(Request $request, $id)
    {
        $banniere = Banniere::findOrFail($id);
        $banniere->delete();


        return redirect()->route('bannieres.index');
    }

}
