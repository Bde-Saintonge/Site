<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    /**
     * Method to return the dashboard view in based on the office of the user.
     */
    public function index(
        Office $office = null
    ): Factory|View|RedirectResponse|Application {
        if (is_null($office)) {
            $office = auth()->user()->office;
        }

        $posts = Post::select([
            'id',
            'slug',
            'title',
            'created_at',
            'updated_at',
            'is_published',
        ])
            ->where([['office_id', $office->id]])
            ->latest('updated_at')
            ->get()
        ;

        if (Gate::allows('verified-role', ['admin'])) {
            $office_typo = Office::select(['code_name', 'name'])->get();
        } else {
            $office_typo = Office::select(['code_name', 'name'])
                ->where([['code_name', $office->code_name]])
                ->get()
            ;
        }

        return view('administration.dashboard', [
            'posts' => $posts,
            'offices_typo' => $office_typo,
            'active_office' => $office->code_name,
        ]);
    }
}
