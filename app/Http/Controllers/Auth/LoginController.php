<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class LoginController extends BaseController
{
    //
    /**
     * Endpoint GET qui retourne la vue de connexion
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard/bda');
        } else {
            return view("auth.login");
        }
    }

    /**
     * Méthode qui permet de vérifier les informations envoyés au formulaire
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function validator(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], array_merge(User::generate_error('email'), User::generate_error('password')));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard/bda');
        }

        return back()->withErrors([
            'error' => "L'adresse email et/ou le mot de passe ne coreespondent pas",
        ]);
    }


    /**
     * Méthode qui permet de déconnecter un utilisateur
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
