<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\User;
use App\Models\Role;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    public function registerView()
    {
        if (!Gate::allows('verified-admin')) {
            return redirect(
                "dashboard/" . Auth::user()->office->code_name,
            )->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour créer un utilisateur.',
            ]);
        }

        $offices = Office::all();
        $roles = Role::all();
        return view('user.create', compact('offices', 'roles'));
    }

    public function register(Request $request)
    {
        if (!Gate::allows('verified-admin')) {
            return redirect(
                "dashboard/" . Auth::user()->office->code_name,
            )->withErrors([
                'error' =>
                    'Vous ne disposez pas des permissions nécessaires pour créer un utilisateur.',
            ]);
        }

        $request->validate([
            'first_name' => 'required|bail',
            'last_name' => 'required|bail',
            'email' => 'required|email|unique:users,email|bail', //|unique:users,email
            'password' => 'required|alpha_dash|min:8|bail',
            'office_code_name' => 'required|bail',
            'roles.*' => 'required|distinct|exists:roles,name|bail',
        ]);

        $user_id = User::insertGetId([
            'first_name' => ucwords($request->input('first_name')),
            'last_name' => strtoupper($request->input('last_name')),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'office_id' => Office::where(
                'code_name',
                $request->input('office_code_name'),
            )->first()->id,
            'created_at' => new DateTime('now'),
        ]);

        $user = User::find($user_id);

        $roles = Role::whereIn('name', $request->input('roles'))->get();

        //TODO: Refactor
        function extractIdRoles($roles): array
        {
            $id = [];
            foreach ($roles as $role) {
                $id[] = $role->id;
            }
            return $id;
        }

        $roles = extractIdRoles($roles);

        $user->roles()->attach($roles);

        return back()->with([
            'success' => ['Utilisateur créer avec succès !'],
        ]);
    }
}
