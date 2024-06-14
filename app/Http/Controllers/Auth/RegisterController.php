<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Image;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:50'],
            'tel' => ['required', 'string', 'max:50'],
            'contrat' => ['required'],
            'metier' => ['required'],
            //mimes:jpeg,png,jpg,zip,pdf|max:2048
            //'cv' => ['required'],
            //'required|file|max:5000|mimes:pdf,docx,doc'
            //'motivation' => ['mimes:doc,docx,pdf,jpeg,jpg,png'],
            'mobilite' => ['required'],
            'adresse' => ['required', 'string', 'max:100'],
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


        $path_cv = null;
        $path_motivation = null;
        $folder= 'users';

        if(Request::hasfile('cv')){

            $cv = Request::file('cv');
            $path_cv = time().$cv->getClientOriginalName();
            Storage::putFileAs($folder, $cv, $path_cv);

        }

         if(Request::hasfile('motivation')){

            $motivation = Request::file('motivation');
            $path_motivation = time().$motivation->getClientOriginalName();
            Storage::putFileAs($folder, $motivation, $path_motivation);

        }


        $user = User::create([
            'cv' => $path_cv,
            'motivation' => $path_motivation,
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'prenom' => $data['prenom'],
            'tel' => $data['tel'],
            'adresse' => $data['adresse'],
            'contrat' => $data['contrat'],
            'metier' => $data['metier'],
            'mobilite' => $data['mobilite'],
            'password' => Hash::make($data['password']),
        ]);


        return $user;
    }
}
