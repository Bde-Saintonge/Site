<?php

namespace App\Http\Controllers\Auth;

use App\Models\Office;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends BaseController
{
    /**
     * Endpoint GET qui retourne la vue de connexion.
     */
    public function login(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        $offices = Office::all();

        return view('auth.login');
    }

    /**
     * Méthode qui permet de vérifier les informations envoyées au formulaire.
     */
    public function validate(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            array_merge(
                User::generate_error('email'),
                User::generate_error('password'),
            ),
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            "L'adresse e-mail et/ou le mot de passe ne correspondent pas !",
        ]);
    }

    /**
     * Méthode qui permet de déconnecter un utilisateur.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home.home');
    }
}
