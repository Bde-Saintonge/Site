<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AdminController;
use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BaseController
{
    //

    public function index($office_name)
    {

        if (Auth::check()) {
            $admin_controller = new AdminController();

            if ($admin_controller->check_role()) {

                switch ($office_name) {
                    case 'bda':
                        $office_id = 1;
                        break;
                    case 'bdc':
                        $office_id = 2;
                        break;
                    case 'bds':
                        $office_id = 3;
                        break;
                    case 'pole-com':
                        $office_id = 4;
                        break;
                }

                $posts = Post::where('office_id', $office_id)->orderBy('updated_at', 'desc')->get();

                return view('auth.dashboard', [
                    'success' => "Vous êtes bien connecté avec l'utilisateur " . Auth::user()->name,
                    'posts' => $posts,
                    'offices_typo' => [['bda', 'BDA'],['bdc', 'BDC'],['bds', 'BDS'],['pole-com', 'Pôle-Com']],
                    'active_office' => $office_name
                ]);
            }
        } else {
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant d’accéder au tableau de bord",
            ]);
        }
    }
}
