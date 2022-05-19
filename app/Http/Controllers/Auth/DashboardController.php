<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AdminController;
use App\Models\Post;
use App\Models\Office;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AdminController
{
    /**
     * Méthode qui permet de retourner les articles d'un bureau vers le dashboard
     */

    public function index($office_name)
    {

        if (Auth::check()) {
            if ($this->check_role('admin') && $this->check_role('bde')) {

                $office_id = Office::where('code_name', $office_name)->first()->id;

                $posts = Post::where('office_id', $office_id)->orderBy('updated_at', 'desc')->get();

                return view('auth.dashboard', [
                    'user_success' => "Vous êtes bien connecté avec l'utilisateur " . Auth::user()->name,
                    'posts' => $posts,
                    'offices_typo' => Office::all(),
                    'active_office' => $office_name,
                ]);
            }
        } else {
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant d’accéder au tableau de bord",
            ]);
        }
    }
}
