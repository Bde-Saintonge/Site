<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //Définition de l'attribut de la classe
    private $per_page = 5;

    /**
     * Méthode qui permet de retourne la liste des articles d'un bureau
     * @param String $office_slug : Nom du bureau
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
     */
    public function office(String $office_slug)
    {
        $office = Office::where('slug', $office_slug)->first();
        if (isset($office) && !empty($office)){
            $posts = Post::where('office_id', $office->id)->paginate($this->per_page);
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

}
