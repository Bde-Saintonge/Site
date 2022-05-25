<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Post;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends AdminController
{
    //Définition de l'attribut de la classe
    private $per_page = 10;

    /**
     * Méthode qui permet de retourne la liste des articles d'un bureau
     * @param String $office_slug : Nom du bureau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
     */
    public function office(String $office_code_name)
    {
        //TODO: Faire un summary interne
        $office = Office::where('name', $office_code_name)->first();

        if (isset($office) && !empty($office)) {
            $posts = Post::where('office_id', $office->id)->where('is_published', true)->paginate(7);

            if (isset($posts) && !empty($posts)) {
                return view('posts.index', compact('posts', 'office'));
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    //@param String $office_slug : Url du bureau
    /**
     * Méthode qui permet d'afficher le contenu d'un article 
     *
     * @param String $post_slug : Url du post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show(String $office_code_name, String $post_slug) //
    {
        $post = Post::where('slug', $post_slug)->first();

        if (isset($post) && !empty($post)) {
            return view('posts.show', compact('post'));
        } else {
            abort(404);
        }
    }

    /**
     * Méthode qui permet de retourner la vue de création d'un article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create_post()
    {
        // !$this->check_role("admin") && !$this->check_office($post->office->code_name)
        if ($this->check_role('admin') && $this->check_role('bde')) {
            return view('admin/create');
        } else {
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant de créer un article",
            ]);
        }
    }

    /**
     * Méthode qui permet d'enregister les données saisies
     * @param Request $request
     */
    public function create_BDD(Request $request)
    {
        // TODO
    }

    /**
     * Méthode qui permet de valider un article
     * @param $id_post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validate_post($id_post)
    {

        if (Auth::check()) {

            if ($this->check_perm('admin') && $this->check_perm('bde')) {
                $post = Post::where('id', $id_post)->first();
                $post->is_published = true;
                $post->updated_at = new DateTime('now');
                $post->save();
                return back()->with('success', "Article validé avec succés !");
            }
            return back()->withErrors([
                'error' => "Vous ne disposez pas des permissions nécessaires pour valider des articles.",
            ]);
        }

        return back()->withErrors([
            'error' => "Veillez-vous connecter avant de valider un article",
        ]);
    }

    /**
     * Méthode qui permet de modifier un article
     */
    public function edit(int $id_post)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant de modifier un article.",
            ]);
        }

        $post = Post::find($id_post);

        if (is_null($post)) {
            return back()->withErrors([
                'error' => "L'article n'existe plus.",
            ]);
        }

        if (!$this->check_role("admin") && !$this->check_office($post->office->code_name)) {
            return back()->withErrors([
                'error' => "Vous ne disposez pas des permissions nécessaires pour modifier cet article.",
            ]);
        }

        return view('posts.create', [
            'post' => $post
        ]);
    }

    /**
     * Méthode qui permet de mettre à jours un post en bdd
     */
    public function store(int $id_post, Request $request)
    {
        $post = Post::find($id_post);

        if (is_null($post)) {
            return redirect("dashboard/{$this->user->office->code_name}")->withErrors([
                'error' => "L'article n'existe plus.",
            ]);
        }

        if (!$this->check_role("admin") && !$this->check_office($post->office->code_name)) {
            return redirect("dashboard/{$this->user->office->code_name}")->withErrors([
                'error' => "Vous ne disposez pas des permissions nécessaires pour modifier cet article.",
            ]);
        }

        $validator = $request->validate([
            'title' => 'required|max:255',
            'image_url' => 'required',
            'content' => 'required',
        ]);

        // dd($request->content, $validator);

        $post->update([
            'title' => $request->title,
            'image_url' => $request->image_url,
            'content' => $request->content,
        ]);

        return redirect("dashboard/{$post->office->code_name}")->with('success', "Article modifié avec succés !");
    }


    /** 
     * Méthode qui permet de supprimer un article
     */
    public function delete($id_post)
    {
        if (Auth::check()) {

            $AdminController = new AdminController();

            if ($AdminController->check_perm()) {
                $post = Post::find($id_post);

                if (!is_null($post)) {
                    return back()->with('success', "Article supprimé avec succés !");
                }

                return back()->withErrors([
                    'error' => "L'article n'existe plus.",
                ]);
            }

            return back()->withErrors([
                'error' => "Vous ne disposez pas des permissions nécessaires pour supprimer des articles.",
            ]);
        }

        return back()->withErrors([
            'error' => "Veillez-vous connecter avant de supprimer un article.",
        ]);
    }
}
