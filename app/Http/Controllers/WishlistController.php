<?php



namespace App\Http\Controllers;



use App\Models\Produit;


use Illuminate\Http\Request;

use Response;


use Illuminate\Support\Facades\Auth;



class WishlistController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {


       $produits = Produit::whereHas('users')->get();
       //$produit->users()->sync($request->user()->id);

       return view('front.pages.wishlist.home', [

            'datas' => $produits

        ]);

    }





    public function store(Produit $produit,Request $request)
    {

       $produit->users()->sync($request->user()->id);

       return back()->with(array(
            'status' => "success",
            'title' => $produit->libelle." est ajouté à votre wishlist!",
        ));

    }


    public function destroy(Produit $produit,Request $request)
    {
        $produit->users()->detach($request->user()->id);
        
        return back()->with(array(
            'status' => "success",
            'title' => "L'article a bien été retiré de votre wishlist!"
        ));
    }








}

