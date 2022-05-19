<?php


namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{
    protected $office_id;
    protected $user;

    public function __construct()
    {
        $this->user = User::find(Auth::user()->id);
    }


    /**
     * Méthode qui permet de vérifier si l'utilisateur est administrateur ou membre d'un des bureaux
     * @return bool
     */
    public function check_role()
    {
        foreach ($this->user->roles as $role) {
            switch ($role->name) {
                case "admin":
                case "bde":
                    return true;
                default:
                    return false;
            }
        };
    }

    /**
     * Méthode qui permet de vérifier si l'utilisateur est admin ou membre du pôle com
     * @return bool
     */

    public function check_if_admin_or_polecom()
    {
        foreach ($this->user->roles as $role) {
            switch ($role->name) {
                case "admin":
                    return true;
                default:
                    break;
            }
        };

        if ($this->user->office_id == Office::where('code_name', 'pole-com')->first()->id) {
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
