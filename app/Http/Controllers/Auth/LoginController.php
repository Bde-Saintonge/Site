<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class LoginController extends BaseController
{
    //
    /**
     * Méthode qui retroune la vue de connexion
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    protected function index(){
        if(isset($_SESSION['session'])){
            return redirect()->route('dashboard');
        }else{
            return view("auth.login");
        }

    }

    /**
     * Méthode qui permet de vérifier les informations envoyés au formulaire
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function validator(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6']
        ], array_merge(User::generate_error('email'), User::generate_error('password')));



        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return $this->login_check_SQL($request);

    }

    /**
     * Méthode qui permet de vérifier si l'utilisateur existe en BDD
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    protected function login_check_SQL(Request $request){

        $user = User::where('email', $request->email)->first();

        if(Hash::check($request->password, $user->password)){
            $_SESSION['session'] = Hash::make($request->email);
            return redirect()->route('dashboard');
        }else{
            return view('auth.login' ,[
                'error' => 'Votre email et/ou votre mot de passe ne correspondent pas.'
            ]);
        }

    }

    /**
     * Méthode qui permet de déconnecter un utilisateur
     */
    protected function logout(){
        unset($_SESSION);
    }
}
