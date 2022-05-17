<?php


namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{
    protected $office_id;


    /**
     * Méthode qui permet de vérifier si l'utilisateur est administrateur ou membre d'un des bureaux
     * @return bool
     */
    public function check_role()
    {

        switch (Auth::user()->role) {
            case "admin":
            case "bda":
            case "bdc":
            case "bds":
            case "pole_com":
                return true;
            default:
                return false;
        }
    }

    /**
     * Méthode qui permet de vérifier si l'utilisateur a le droit de valider / supprimer un article
     * @return bool
     */

    public function check_perm()
    {
        switch (Auth::user()->role) {
            case "admin":
            case "pole_com":
                return true;
            default:
                return false;
        }
    }

    public function check_office_modify_post($post_id)
    {
        $role = Auth::user()->role; //pole_com Pôle_Com
    }


    /**
     * Méthode qui permet de vérifier si l'utilisateur a le droit d'effectuer une action
     * @return bool
     */
    public function check_if_user_can()
    {

        if (isset($this->office_id)) {

            $office = Office::where('id', $this->office_id)->first();

            if (Auth::user()->role === strtolower($office->name)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
