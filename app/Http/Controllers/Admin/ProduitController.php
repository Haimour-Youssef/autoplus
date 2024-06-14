<?php

namespace App\Http\Controllers\Admin;


use Response;
use App\Models\Image;
use App\Models\Client;
use App\Models\Marque;
use App\Models\Reparation;
use Image as Intervention;
use App\Models\Produit;
use App\Models\Verification;
use Illuminate\Http\Request;
use App\Models\TypeVerification;
use App\Traits\ProduitTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

use App\Http\Requests\ProduitRequest;


class ProduitController extends Controller
{
    use ProduitTrait;

    public function __construct()
    {
        //$this->middleware('can:admin');
        //$this->authorizeResource(Produit::class, 'produit');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {




        $datas = Produit::select('produits.*','marques.libelle as marque_libelle','familles.libelle as famille_libelle')

        ->with('image')
        ->withCount('users')
        //->whereHas('commentaires')
        ->withCount('commentaires')
        
        
        ->join('marques', 'marques.id', '=', 'produits.marque_id')
        ->join('familles', 'familles.id', '=', 'produits.famille_id')
        ->join('fournisseurs', 'fournisseurs.id', '=', 'produits.fournisseur_id')
        
       //->get()
;
//return $datas;
        $datas = $datas->searchKey($request->key_search);
        $datas = $datas->searchEtat($request->produit_search);
        $datas = $datas->searchRange($request->dateRange);


        $orderBy = 'id';$orderType = 'desc';$items = 10;

        if($request->orderBy and $request->orderBy <> ""){$orderBy = $request->orderBy;}
        if($request->orderType and $request->orderType <> ""){$orderType = $request->orderType;}
        if($request->items and $request->items > 10){$items = $request->items;}
        

        $datas = $datas
        ->orderby($orderBy,$orderType)
        ->paginate($items)
        ;


        return view('back.produits.index', compact('datas'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
     return view('back.produits.create');
 }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(ProduitRequest $request)
    {

        
        
        $validatedData = $request->validated();


        DB::beginTransaction();

        try {
            
        $produit = Produit::create($request->all() + ['slug' => Str::slug($request->libelle, '-')]);

        $this->saveImageTrait($request->picture,$produit);


        } catch (\Exception $e) {
            return $e;
            DB::rollBack();
        }

        DB::commit();

        return redirect()->route('produits.index')->with(array(
            'status' => "success",
            'title' =>  "Insertion",
            'content' => $produit->libelle." a été ajouté avec succées!"
        ));
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Produit  $produit
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        return view('back.produits.show', ['data' => Produit::findOrFail($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Produit  $produit
    * @return \Illuminate\Http\Response
    */
        public function edit($id)

    {

        $produit = Produit::findOrFail($id);

        return view('back.produits.edit', ['produit' => $produit]);

    }



    public function update(ProduitRequest $request,$id)

    {

        $produit = Produit::findOrFail($id);
        
        DB::beginTransaction();

        try {
            
        $produit->fill($request->all() + ['slug' => Str::slug($request->libelle, '-')]);
        $produit->save();

        $this->saveImageTrait($request->picture,$produit);


        } catch (\Exception $e) {
            return $e;
            DB::rollBack();
        }

        DB::commit();

        return redirect()->route('produits.index')->with(array(
            'status' => "info",
            'title' =>  "Mise à jour",
            'content' => $request->libelle." a été modifié avec succées!"
        ));


    }


    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Produit  $produit
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request, $id)
    {
        //$name = Produit::select('name')->whereId($id)->get()->first();
        Produit::destroy($id);

        return redirect()
        ->back()
        ->with(array(
            'status' => "error",
            'title' => " Supprimé",
            'content' => "Produit supprimé avec succèes"
        ));
    }
    
    
    
    
    
    
    public function restore($id) {
        $produit = Produit::onlyTrashed()->where('id', $id)->first();

        $produit->restore();
        return redirect()->back()->with(array(
            'status' => "success",
            'title' => $produit->name." est restoré",
            'content' => "Utilisateur restoré avec succèes"
        ));
    }



    public function imprimer($id) {
        $produit = Produit::
        where('produits.id', $id)
        ->select('produits.*')
        ->first();

        return view('back.produits.imprimer', compact('produit'));
    }


    public function mesure($id) {
        $produit = Produit::
        where('produits.id', $id)
        ->select('produits.*')
        ->first();

        return view('back.produits.mesure', compact('produit'));
    }


    
    public function forcedelete($id) {


        $produit = Produit::onlyTrashed()->where('id', $id)->first();
        $name = $produit->name;
        
        $produit->forceDelete();
        return redirect()->back()->with(array(
            'status' => "error",
            'title' => $name." est supprimé",
            'content' => "Utilisateur supprimé définitevement!"
        ));
    }










    public function destroySelect(Request $request)
    {

        $pieces = explode(",", $request->input('cadnas'));
        for ($i=0; $i < count($pieces) ; $i++) { 
            Produit::destroy($pieces[$i]);
        }
        

        return redirect()
        ->back()
        ->with(array(
            'status' => "error",
            'title' => "Produit(s) supprimé(s)",
            'content' => "Produit(s) supprimé(s) avec succèes"
        ));/**/
    }





    public function valideSelect(Request $request) {

       
       $pieces = explode(",", $request->input('cadnas'));
       for ($i=0; $i < count($pieces) ; $i++) { 
        $produit = Produit::find($pieces[$i]);
        $produit->valider = true;
        $produit->save();
    }


    return redirect()
    ->back()
    ->with(array(
        'status' => "success",
        'title' => "Validé",
        'content' => "Vériffications validée(s) avec succèes"
    ));/**/

}

    
    
    public function verifieSelect(Request $request) {



       $verification = Verification::create([

        'user_id' => $request->user()->id,
        'type_verification_id' => TypeVerification::where('is_produit',1)->first()->id,

    ]);


       $pieces = explode(",", $request->input('cadnas'));
       for ($i=0; $i < count($pieces) ; $i++) { 
        $produit = Produit::find($pieces[$i]);
        $produit->verification_id = $verification->id;
        $produit->save();
    }


    return redirect()
    ->back()
    ->with(array(
        'status' => "success",
        'title' => "Demande envoyé",
        'content' => "Demande de vériffication est envoyé avec succèes"
    ));/**/

}

public function forcedeleteSelect(Request $request) {

    $pieces = explode(",", $request->input('cadnas'));
    for ($i=0; $i < count($pieces) ; $i++) { 
        Produit::whereId($pieces[$i])->forceDelete();
    }


    return redirect()
    ->back()
    ->with(array(
        'status' => "error",
        'title' => "Utilisateurs est supprimé",
        'content' => "Utilisateur supprimé avec succèes"
    ));/**/



}



}
