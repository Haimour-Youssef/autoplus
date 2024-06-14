<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mightAlsoLike = Produit::mightAlsoLike()->get();

        return view('front.pages.cart.home')->with([
            //'mightAlsoLike' => $mightAlsoLike,
            //'discount' => getNumbers()->get('discount'),
            //'newSubtotal' => getNumbers()->get('newSubtotal'),
            //'newTax' => getNumbers()->get('newTax'),
            //'newTotal' => getNumbers()->get('newTotal'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function store(Produit $produit,Request $request)
    {

        

        if(!$request->quantity) $request->request->add(['quantity' => '1']);
        
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($produit) {
            return $cartItem->id === $produit->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->back()->with(array(
            'status' => "success",
            'title' => $produit->libelle." est déjà ajouté à votre panier!",
            'color' => '#F17E0A'
        ));
        }


        Cart::add($produit->id, $produit->libelle, $request->quantity, $produit->prix_reduis)
            ->associate('App\Models\Produit');


        /// delete from wishlist
        if($request->remove_cart)$produit->users()->detach($request->user()->id);

        /// Maj produit panier
        $produit->update(['panier' => $produit->panier + 1]);


         return back()->with(array(
            'status' => "success",
            'title' =>$produit->libelle." a été ajouté à votre panier!"
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



       /*if ($request->quantity > $request->produitQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false], 400);
        }*/

       Cart::update($id, $request->quantite_select);
        return back()->with(array(
            'status' => "success",
            'title' => "Quantité actualisée"
        ));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with(array(
            'status' => "success",
            'title' => "L'article a bien été retiré de votre panier!"
        ));
    }

    /**
     * Switch item for shopping cart to Save for Later.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already Saved For Later!');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Produit');

        return redirect()->route('cart.index')->with('success_message', 'Item has been Saved For Later!');
    }
}
