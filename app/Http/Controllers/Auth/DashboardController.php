<?php

namespace App\Http\Controllers\Auth;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BaseController
{
    //

    public function index(){

        if(Auth::check()){
            $posts = Post::where('is_published', false)->get();

            return view('auth.dashboard', [
                'success' => "Vous êtes bien connecté avec l'utilisateur ". Auth::user()->name,
                'posts' => $posts
            ]);
        }else{
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant d’accéder à votre compte",
            ]);
        }
    }
}
