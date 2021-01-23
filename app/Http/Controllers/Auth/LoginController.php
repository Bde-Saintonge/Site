<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class LoginController extends BaseController
{
    //

    protected function index(){
        if(isset($_SESSION['session'])){
            return redirect()->route('dashboard');
        }else{
            return view("auth.login");
        }

    }

    protected function validator(Request $request)
    {
        $convert_objet_to_array = (array)$request->request;

        $messages = [
            'email.required' => "Vous devez compléter par votre <strong>adresse mail.</strong>",
            'email.string' => "Vous devez entrer une <strong>chaine de caractère.</strong>",
            'email.max' => "Veuillez compléter votre<strong> adresse mail avec moins de 255 caractères.</strong>",
            'email.email' => "Veuillez compléter par votre<strong> adresse mail.</strong>",
            'password.required' => "Vous devez compléter par votre <strong>mot de passe.</strong>",
            'password.string' => "Vous devez entrer une <strong>chaine de caractère.</strong>",
            'password.min' => "Veuillez compléter votre nom de famille <strong>avec moins de 8 caractères.</strong>",
            'password.confirmed' => "Vous devez compléter par votre <strong>Les mots de passes ne sont pas identiques.</strong>",
        ];

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6']
        ], $messages);


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return Redirect::route("check_user", $request);

    }

    protected function login_check_SQL(Request $request){

        $users = DB::select("select * from users");

        foreach ($users as $user){

            if($request->email == $user->email && Hash::check($request->password, $user->password)){


                $_SESSION['session'] = Hash::make($request->email);

                return redirect()->route('dashboard');
            }else{
                return view('auth.login' ,[
                    'error' => 'Votre email et/ou votre mot de passe ne sont pas correcte.'
                ]);
            }
        }

    }

    protected function loggout(){

    }
}
