<?php

namespace App\Http\Controllers\Admin;


use Response;
use App\Models\Image;
use App\Models\Client;
use App\Models\Marque;
use App\Models\Reparation;
use Image as Intervention;
use App\Models\Commentaire;
use App\Models\Verification;
use Illuminate\Http\Request;
use App\Models\TypeVerification;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

use App\Http\Requests\CommentaireRequest;


class CommentaireController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('can:admin')->except('store');
        //$this->authorizeResource(Commentaire::class, 'commentaire');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {


        $datas = Commentaire::

        join('produits', 'produits.id', '=', 'commentaires.produit_id')
        

        ->select('commentaires.*',
            'produits.libelle as produit_libelle'
        );


        //$datas = $datas->searchKey($request->key_search);
        //$datas = $datas->searchEtat($request->commentaire_search);
        //$datas = $datas->searchRange($request->dateRange);


        $orderBy = 'created_at';$orderType = 'desc';$items = 10;

        if($request->orderBy and $request->orderBy <> ""){$orderBy = $request->orderBy;}
        if($request->orderType and $request->orderType <> ""){$orderType = $request->orderType;}
        if($request->items and $request->items > 10){$items = $request->items;}
        

        $datas = $datas
        ->orderby($orderBy,$orderType)
        ->paginate($items)
        ;


        return view('back.commentaires.index', compact('datas'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
     return view('back.commentaires.create');
 }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

        
        
        //$validatedData = $request->validated();


        DB::beginTransaction();

        try {
            
        $commentaire = Commentaire::create($request->all());

        } catch (\Exception $e) {
             return redirect()->back()->with(array(
            'status' => "success",
            'color' => "red",
            'title' => " Arreur, essayé à nouveau!"
        ));
            DB::rollBack();
        }

        DB::commit();

        return redirect()->back()->with(array(
            'status' => "success",
            'title' => " Avis envoyé avec succées!"
        ));
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Commentaire  $commentaire
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        return view('back.commentaires.show', ['data' => Commentaire::findOrFail($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Commentaire  $commentaire
    * @return \Illuminate\Http\Response
    */
        public function edit($id)

    {

        $commentaire = Commentaire::findOrFail($id);

        return view('back.commentaires.edit', ['commentaire' => $commentaire]);

    }



    public function update(CommentaireRequest $request,$id)

    {

        $commentaire = Commentaire::findOrFail($id);
        
        DB::beginTransaction();

        try {
            
        $commentaire->fill($request->all() + ['slug' => Str::slug($request->libelle, '-')]);
        $commentaire->save();

        $this->saveImageTrait($request->picture,$commentaire);


        } catch (\Exception $e) {
            return $e;
            DB::rollBack();
        }

        DB::commit();

        return redirect()->route('commentaires.index')->with(array(
            'status' => "info",
            'title' =>  "Mise à jour",
            'content' => $request->libelle." a été modifié avec succées!"
        ));


    }


    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Commentaire  $commentaire
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request, $id)
    {
        //$name = Commentaire::select('name')->whereId($id)->get()->first();
        Commentaire::destroy($id);

        return redirect()
        ->back()
        ->with(array(
            'status' => "error",
            'title' => " Supprimé",
            'content' => "Commentaire supprimé avec succèes"
        ));
    }
    
    
    
    
    
    
    public function valider(Commentaire $commentaire) {
       
        $commentaire->update(['valider' => 1]);
        return redirect()->back()->with(array(
            'status' => "success",
            'title' => "Avis validé",
            'content' => "Avis validé avec succèes"
        ));
    }



    public function imprimer($id) {
        $commentaire = Commentaire::
        where('commentaires.id', $id)
        ->select('commentaires.*')
        ->first();

        return view('back.commentaires.imprimer', compact('commentaire'));
    }


    public function mesure($id) {
        $commentaire = Commentaire::
        where('commentaires.id', $id)
        ->select('commentaires.*')
        ->first();

        return view('back.commentaires.mesure', compact('commentaire'));
    }


    
    public function forcedelete($id) {


        $commentaire = Commentaire::onlyTrashed()->where('id', $id)->first();
        $name = $commentaire->name;
        
        $commentaire->forceDelete();
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
            Commentaire::destroy($pieces[$i]);
        }
        

        return redirect()
        ->back()
        ->with(array(
            'status' => "error",
            'title' => "Avis supprimés",
            'content' => "Avis supprimés avec succèes"
        ));/**/
    }





    public function validerSelect(Request $request) {

       
       $pieces = explode(",", $request->input('cadnas'));
       for ($i=0; $i < count($pieces) ; $i++) { 
        $commentaire = Commentaire::find($pieces[$i]);
        $commentaire->valider = true;
        $commentaire->save();
    }


    return redirect()
    ->back()
    ->with(array(
        'status' => "success",
        'title' => "Validé",
        'content' => "Avis validée(s) avec succèes"
    ));/**/

}

    
    
    public function verifieSelect(Request $request) {



       $verification = Verification::create([

        'user_id' => $request->user()->id,
        'type_verification_id' => TypeVerification::where('is_commentaire',1)->first()->id,

    ]);


       $pieces = explode(",", $request->input('cadnas'));
       for ($i=0; $i < count($pieces) ; $i++) { 
        $commentaire = Commentaire::find($pieces[$i]);
        $commentaire->verification_id = $verification->id;
        $commentaire->save();
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
        Commentaire::whereId($pieces[$i])->forceDelete();
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
