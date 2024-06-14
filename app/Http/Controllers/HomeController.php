<?php

namespace App\Http\Controllers;

use App\Mail\ContactMarkdown;
use App\Models\Actualite;
use App\Models\Categorie;
use App\Models\Offre;
use App\Models\Contact;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('offrePostule');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       
        return view('front.pages.home');
    }

     public function sendEmail(Request $request)
    {


        $contacts = Contact::create($request->all());

        Mail::to('elhilali067@gmail.com')->send(new ContactMarkdown(
             array(
                 'name' => $request->input('name'),
                 'email' => $request->input('email'),
                 'tel' => $request->input('tel'),
                 'subject' => $request->input('subject'),
                 'message' => $request->input('message')
             )
         ));
       
        return Response::json([
            'etat' => 'ok',
            ]);

    }



     public function media()
    {


        $actualites = Actualite::latest()->paginate(5);

        return view('front.pages.media', [
            'actualites' => $actualites
        ]);

    }


    public function mediaDet($id)
    {


        $actualite = Actualite::findOrFail($id);

        return view('front.pages.media-details', [
            'data' => $actualite
        ]);

    }




    
    public function produitDet(Categorie $categorie)
    {


        //$categorie = Categorie::findOrFail($id);

        return view('front.pages.produits', [
            'categorie' => $categorie
        ]);

    }


     public function offreDet($id)
    {


        $offre = Offre::findOrFail($id);

        return view('front.pages.offre-details', [
            'data' => $offre,
            'postuler' => $offre->users->contains(Auth::id())
        ]);

    }



        public function offrePostule($id,Request $request)
    {


       $offre = Offre::findOrFail($id);


       $offre->users()->sync($request->user()->id);

       return redirect()
        ->back()
        ->with(array('status' => "success"));

    }




     public function espaceCandidat()
    {

        if (Auth::check()) { return redirect()->route('login');}
        return view('front.pages.candidat');

    }


    public function monEspace()
    {

        return view('front.pages.espace');

    }



    



}
