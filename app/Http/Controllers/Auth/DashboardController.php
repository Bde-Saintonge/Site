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

    public function index($office_code_name)
    {
        if (Auth::check()) {
            if (
                $this->check_role('admin') ||
                $this->check_role('bde')
            ) {

                $office_id = Office::where('code_name', $office_code_name)->first()->id;

                $posts = Post::select(['id', 'title', 'created_at', 'updated_at', 'is_published'])->where([['office_id', $office_id], ['in_trash', false]])->orderBy('updated_at', 'desc')->get();

                return view('auth.dashboard', [
                    'posts' => $posts,
                    'offices_typo' => Office::select('code_name', 'name')->get(),
                    'active_office' => $office_code_name,
                ]);
            }
        } else {
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant d’accéder au tableau de bord",
            ]);
        }
    }
}
