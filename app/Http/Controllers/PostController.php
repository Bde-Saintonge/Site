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
    private $per_page = 5;

    /**
     * Méthode qui permet de retourne la liste des articles d'un bureau
     * @param String $office_slug : Nom du bureau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
     */
    public function office(String $office_name)
    {
        $office = Office::where('name', $office_name)->first();

        if (isset($office) && !empty($office)){
            $posts = Post::where('office_id', $office->id)->where('is_published', true)->paginate($this->per_page);
            if (isset($posts) && !empty($posts)){
                return view('posts.index', compact('posts', 'office'));
            }else{
                abort(404);
            }
        }else{
            abort(404);
        }

    }

    /**
     * Méthode qui permet de retourner la liste des articles selon un utilisateur
     * @param Int $user_id : Id de l'utilisateur
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function user(Int $user_id)
    {
        $user = User::find($user_id);

        if (isset($user) && !empty($user)){
            $posts = Post::where('user_id', $user->id)->paginate($this->per_page);
        }else{
            abort(404);
        }

        if (isset($posts) && !empty($posts)){
            return view('posts.index', compact('posts', 'user'));
        }else{
            abort(404);
        }
    }

    /**
     * Méthode qui permet d'afficher le contenu d'un article
     * @param String $office_slug : Url du bureau
     * @param String $post_slug : Url du post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show(String $office_slug, String $post_slug)
    {
        $post = Post::where('slug', $post_slug)->first();
        if (isset($post) && !empty($post)){
            return view('posts.show', compact('post'));
        }else{
            abort(404);
        }
    }

    /**
     * Méthode qui permet de retourner la vue de création d'un article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create_post (){

        if($this->check_role()){
            return view('admin/create');
        }else{
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant de créer un article",
            ]);
        }
    }

    /**
     * Méthode qui permet d'enregister les données saisies
     * @param Request $request
     */
    public function create_BDD(Request $request){
        // TODO
    }

    /**
     * Méthode qui permet de valider un article
     * @param $id_post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validate_post($id_post){

        if (Auth::check()){

            if($this->isAdmin()){
                //Vérifie si l'utilisateur a le droit de valider l'article
                $post = Post::where('id', $id_post)->first();
                $post->is_published = true;
                $post->updated_at = new DateTime('now');
                $post->save();
                return redirect()->intended('dashboard');
            }else{
                return back()->withErrors([
                    'error' => "Vous ne disposez pas des permissions nécessaires pour valider des articles.",
                ]);
            }
        }else{
            return back()->withErrors([
                'error' => "Veillez-vous connecter avant de valider un article",
            ]);
        }
    }

    /**
     * Méthode qui permet de modifier un article
     */
    public function edit($id_post){
        // TODO: "edit";
    }

    /**
     * Méthode qui permet de supprimer un aticle
     */
    public function delete($id_post){
        // TODO: "delete";
    }
}
