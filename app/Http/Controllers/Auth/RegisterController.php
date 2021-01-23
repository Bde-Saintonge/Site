<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;


class RegisterController extends BaseController
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


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function index(){
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  Illuminate\Http\Request array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(Request $request)
    {
        $convert_objet_to_array = (array)$request->request;

        $messages = [
            'lastname.required' => "Vous devez compléter par votre <strong>nom de famille.</strong>",
            'lastname.string' => "Vous devez entrer une <strong>chaine de caractère.</strong>",
            'lastname.max' => "Veuillez compléter votre nom de famille <strong>avec moins de 255 caractères.</strong>",
            'name.required' => "Vous devez compléter par votre <strong>prénom.</strong>",
            'name.string' => "Vous devez entrer une <strong>chaine de caractère.</strong>",
            'name.max' => "Veuillez compléter votre nom de famille <strong>avec moins de 255 caractères.</strong>",
            'email.required' => "Vous devez compléter par votre <strong>adresse mail.</strong>",
            'email.string' => "Vous devez entrer une <strong>chaine de caractère.</strong>",
            'email.max' => "Veuillez compléter votre<strong> adresse mail avec moins de 255 caractères.</strong>",
            'email.email' => "Veuillez compléter par votre<strong> adresse mail.</strong>",
            'password.required' => "Vous devez compléter par votre <strong>mot de passe.</strong>",
            'password.string' => "Vous devez entrer une <strong>chaine de caractère.</strong>",
            'password.min' => "Veuillez compléter votre nom de famille <strong>avec moins de 8 caractères.</strong>",
            'password.confirmed' => "Vous devez compléter par votre <strong>Les mots de passes ne sont pas identiques.</strong>",
            'agree.required' => "Vous devez compléter par votre <strong>Veuillez accepter nos termes et notre politique.</strong>"
        ];

        $validator = Validator::make($request->all(), [
            'lastname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'agree' => ['required']
        ], $messages);


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return Redirect::route("register-insert-data", $request);

    }

    protected function insert_SQL_User(Request $request){

        return User::create([
            'lastname' => $request->lastname,
            'name' => $request->name,
            'email' => $request->email,
            'class' => $request->class,
            'password' => Hash::make($request->password),
            'permission' => "eleve",
            'created_at' => now()->timestamp,
            'updated_at' => now()->timestamp,
        ]);
    }
}
