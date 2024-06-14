<?php

   

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Requests\ProfilRequest;

class ProfileController extends Controller
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

   
   public function edit(User $user)
{
    $this->authorize ('manage', $user);
    return view ('front.pages.changeProfil', compact ('user'));
}




public function update(ProfilRequest $request, User $user)
{


    
    $this->authorize ('manage', $user);


    $user->update ($request->all());
    return redirect()
        ->back()
        ->with(array('status' => "success"));
}



}