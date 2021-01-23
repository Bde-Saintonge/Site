<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    //

    protected function index(){


        if(isset($_SESSION['session'])){
            return view('auth.dashboard', [
                'success' => 'Vous êtes bien connecté.'
            ]);
        }else{
            return view('auth.login', [
                'error' => "Vous devez d’abord vous connecter pour pouvoir accéder à votre Tableau de bord."
            ]);
        }
    }
}
