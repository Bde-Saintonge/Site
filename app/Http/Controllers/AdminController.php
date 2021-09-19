<?php


namespace App\Http\Controllers;
use App\Models\Office;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{
    private $user;
    public $office_id;

    public function __construct() {
        $this->user = Auth::user();
    }

    /**
     * Méthode qui permet de vérifier si l'utilisateur est administrateur ou membre d'un des bureaux
     * @return bool
     */
    public function check_role (){
        if($this->user->role === "admin"){
            return true;
        }else{
            if($this->user->role === "bda" OR $this->user->role === "bdc" OR $this->user->role === "bds" OR $this->user->role === "pole_com"){
                return true;
            }else{
                return false;
            }
        }

    }


    /**
     * Méthode qui permet de vérifier si l'utilisateur a le droit d'effectuer une action
     * @return bool
     */
    public function check_if_user_can (){


        if (isset($this->office_id)) {

            $office = Office::where('id', $this->office_id)->first();

            if ($this->user->role === strtolower($office->name)) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Méthode qui permet de vérifier si l'utilisateur est administrateur est a le droit de valider un article
     * @return bool
     */
    public function isAdmin (){

        if ($this->user->role === 'admin') {
            return true;
        } else {
            return false;
        }
    }



}
