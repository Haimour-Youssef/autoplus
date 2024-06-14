<?php



namespace App\Http\Controllers\Admin;



use App\Models\Famille;

use App\Http\Requests\FamilleRequest;

use Illuminate\Http\Request;

use App\Traits\FamilleTrait;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

use Image as Intervention;



class FamilleController extends Controller

{



    use FamilleTrait;



   



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

     

        return view(

            'back.familles.index', 

            [

                'familles' => Famille::orderBy('libelle')->get()

            ]

        );

    }











    public function create()

    {

        //$this->authorize('create');

        return view('back.familles.create');

    }



    



    public function store(FamilleRequest $request)

    {



        $validatedData = $request->validated();

        $famille = Famille::create($request->all() + ['slug' => Str::slug($request->libelle, '-')]);



       $this->saveImageTrait($request->picture,$famille);

        return redirect()->route('familles.index');



    }



    public function edit($id)

    {

        $famille = Famille::findOrFail($id);

        return view('back.familles.edit', ['famille' => $famille]);

    }



    public function update(FamilleRequest $request, $id)

    {

        $famille = Famille::findOrFail($id);



        $validatedData = $request->validated();



        $this->saveImageTrait($request->picture,$famille);



        $famille->fill($request->all() + ['slug' => Str::slug($request->libelle, '-')]);

        $famille->save();



        return redirect()->route('familles.index');

    }



    public function destroy(Request $request, $id)

    {

        $famille = Famille::findOrFail($id);

        $famille->delete();





        return redirect()->route('familles.index');

    }



}

