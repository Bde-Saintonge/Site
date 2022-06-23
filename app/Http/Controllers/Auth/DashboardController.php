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

    public function index(Office $office)
    {
        //TODO: redo with or without office as parameter
        if (Auth::check()) {
            if ($this->check_role('admin') || $this->check_role('bde')) {
                $office_id = Office::where([
                    ['code_name', $office_code_name],
                ])->first()->id;

                $posts = Post::select([
                    'id',
                    'title',
                    'created_at',
                    'updated_at',
                    'is_published',
                ])
                    ->where([['office_id', $office_id]])
                    ->latest('updated_at')
                    ->get();

                if ($this->check_role('admin')) {
                    $office_typo = Office::select(['code_name', 'name'])->get();
                } elseif ($this->check_role('bde')) {
                    $office_typo = Office::select(['code_name', 'name'])
                        ->where([['code_name', $office_code_name]])
                        ->get();
                }

                return view('auth.dashboard', [
                    'posts' => $posts,
                    'offices_typo' => $office_typo,
                    'active_office' => $office_code_name,
                ]);
            }
        }
        return back()->withErrors([
            'error' =>
                'Veillez-vous connecter avant d’accéder au tableau de bord',
        ]);
    }
}
