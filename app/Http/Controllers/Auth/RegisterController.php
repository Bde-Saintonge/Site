<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;


class RegisterController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function index(){
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  Illuminate\Http\Request array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'lastname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'agree' => ['required']
        ], array_merge(User::generate_error('lastname'), User::generate_error('name'), User::generate_error('email'), User::generate_error('password'), User::generate_error('agree')));


        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return Redirect::route("register-insert-data", $request);

    }

    protected function insert_SQL_User(Request $request){

        User::create([
            'lastname' => $request->lastname,
            'name' => $request->name,
            'email' => $request->email,
            'class' => $request->class,
            'password' => Hash::make($request->password),
            'permission' => "eleve",
            'created_at' => now()->timestamp,
            'updated_at' => now()->timestamp,
        ]);

        return redirect()->route('login');
    }
}
