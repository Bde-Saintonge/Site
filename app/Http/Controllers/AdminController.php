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
     * Vérifie si l'utilisateur possède le rôle passé en paramètre
     * @return bool
     */
    protected function check_role(string $checkedRole)
    {
        foreach ($this->user->roles as $userRole) {
            if ($userRole->name === $checkedRole) {
                return true;
            }
        };
        return false;
    }

    /**
     * Vérifie si l'utilisateur fait parti du bureau passé en paramètre
     * @return bool
     */
    protected function check_office(string $checkedOffice = 'pole-com')
    {
        if ($this->user->office_id === Office::where('code_name', $checkedOffice)->first()->id) {
            return true;
        }
        return false;
    }
}
