<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Post;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\is_settled;

class PostController extends AdminController
{
    /**
     * Méthode qui permet de retourner la liste des articles d'un bureau
     * @param string $office_code_name : Nom du bureau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
     */
    public function office(string $office_code_name)
    {
        $office = Office::search($office_code_name);

        if (is_null($office)) {
            abort(404);
        }

        $posts = Post::select([
            'title',
            'image_url',
            'slug',
            'summary',
            'created_at',
        ])
            ->where([['office_id', $office->id], ['is_published', true]])
            ->latest()
            ->paginate(7);

        return view('posts.index', compact('posts', 'office'));
    }

    //@param String $office_slug : Url du bureau

    /**
     * Méthode qui permet d'afficher le contenu d'un article
     *
     * @param String $post_slug : Url du post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show(string $office_code_name, string $post_slug)
    {
        //
        $post = Post::where('slug', $post_slug)->first();

        if (empty($post)) {
            abort(404);
        }

        return view('posts.show', compact('post'));
    }

    /**
     * Méthode qui permet de retourner la vue de création d'un article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create_post(string $office_code_name)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'error' => 'Veillez-vous connecter avant de valider un article',
            ]);
        }

        if (
            !$this->check_role('admin') &&
            !$this->check_office($office_code_name)
        ) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour créer un article.',
            ]);
        }

        //TODO: Faire un summary interne

        return view('posts.create');
    }

    /**
     * Méthode qui permet de valider un article
     * @param $id_post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validate_post($id_post)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'error' => 'Veillez-vous connecter avant de valider un article',
            ]);
        }

        if (!$this->check_role('admin') && !$this->check_role('bde')) {
            return back()->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour valider des articles.',
            ]);
        }

        $post = Post::where('id', $id_post)->first();
        $post->is_published = true;
        $post->updated_at = new DateTime('now');
        $post->save();
        return back()->with([
            'success' => ['Article validé avec succés !'],
        ]);
    }

    /**
     * Méthode qui permet de modifier un article
     */
    public function edit(int $id_post)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'error' =>
                    'Veillez-vous connecter avant de modifier un article.',
            ]);
        }

        $post = Post::find($id_post);

        if (is_null($post)) {
            return back()->withErrors([
                'error' => "L'article n'existe plus.",
            ]);
        }

        if (
            !$this->check_role('admin') &&
            !$this->check_office($post->office->code_name)
        ) {
            return back()->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour modifier cet article.',
            ]);
        }

        return view('posts.create', [
            'post' => $post,
        ]);
    }

    /**
     * Méthode qui permet de mettre à jour un post en bdd
     */
    public function store(int $id_post, Request $request)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'error' =>
                    'Veillez-vous connecter avant de modifier un article.',
            ]);
        }

        $post = Post::find($id_post);

        if (is_null($post)) {
            return redirect()
                ->route('dashboard')
                ->withErrors([
                    'error' => "L'article n'existe plus.",
                ]);
        }

        if (
            !$this->check_role('admin') &&
            !$this->check_office($post->office->code_name)
        ) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour modifier cet article.',
            ]);
        }

        $validator = $request->validate([
            'title' => 'required|max:255',
            'image_url' => 'required',
            'content' => 'required',
        ]);
        $post->update([
            'title' => $request->input('title'),
            'image_url' => $request->input('image_url'),
            'content' => $request->input('content'),
        ]);

        return redirect("dashboard/{$post->office->code_name}")->with([
            'success' => ['Article modifié avec succès !'],
        ]);
    }

    /**
     * Méthode qui permet de supprimer un article
     */
    public function delete($id_post)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'error' =>
                    'Veillez-vous connecter avant de supprimer un article.',
            ]);
        }

        $post = Post::find($id_post);

        if (is_null($post)) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' => "L'article n'existe plus.",
            ]);
        }

        /**
         * A: Est admin
         * O: Appartient au même office
         * P: Est publié
         *
         * A + ( O . !P ) => A le droit de supprimer.
         * !A . ( !O + P ) => N'a pas le droit de supprimer.
         */
        if (
            !$this->check_role('admin') &&
            (!$this->check_office($post->office->code_name) ||
                $post->is_published)
        ) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour supprimer cet article.',
            ]);
        }

        $post->delete();

        return redirect("dashboard/{$post->office->code_name}")->with([
            'success' => ['Article placé dans la corbeille !'],
        ]);
    }
}
