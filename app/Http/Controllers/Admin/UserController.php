<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class UserController extends Controller
{




    public function __construct()
    {
        //$this->middleware('auth')->except('show');
        //$this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view(
            'back.users.index', 
            [
                'users' => User::where('is_admin','false')->orderby('id','desc')->get(),
            ]
        );
    }





    public function create()
    {
        //$this->authorize('create');
        return view('back.users.create');
    }

    

    public function store(UserStore $request)
    {

        $validatedData = $request->validated();
        $validatedData['partenaire_id'] = $request->partenaire;
        $user = User::create($validatedData);

        $this->saveImageTrait($request->picture,$user);

        return redirect()->route('users.index');

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('back.users.edit', ['user' => $user]);
    }

    public function update(UserUpdate $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validated();

        $validatedData['partenaire_id'] = $request->partenaire;
        $user->fill($validatedData);
        $user->save();

        $this->saveImageTrait($request->picture,$user);

        return redirect()->route('users.index');
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return redirect()->route('users.index');
    }

    

}
