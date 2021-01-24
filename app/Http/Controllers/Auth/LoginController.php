<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class LoginController extends BaseController
{
    //

    protected function index(){
        if(isset($_SESSION['session'])){
            return redirect()->route('dashboard');
        }else{
            return view("auth.login");
        }

    }

    protected function validator(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6']
        ], array_merge(User::generate_error('email'), User::generate_error('password')));


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return Redirect::route("check_user", $request);

    }

    protected function login_check_SQL(Request $request){

        $users = DB::select("select * from users");

        foreach ($users as $user){

            if($request->email == $user->email && Hash::check($request->password, $user->password)){


                $_SESSION['session'] = Hash::make($request->email);

                return redirect()->route('dashboard');
            }else{
                return view('auth.login' ,[
                    'error' => 'Votre email et/ou votre mot de passe ne correspondent pas.'
                ]);
            }
        }

    }

    protected function loggout(){

    }
}
