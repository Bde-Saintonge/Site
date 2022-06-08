<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    public function registerView()
    {
        $offices = Office::all();
        $roles = Role::all();
        return view('user.create', compact('offices', 'roles'));
    }

    public function register(Request $request)
    {
        dd($request);

        $validator = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'office' => 'required',
            'roles.*' => 'required|distinct',
        ]);

        $post->update([
            'title' => $request->input('title'),
            'image_url' => $request->input('image_url'),
            'content' => $request->input('content'),
            'is_published' => false,
            'updated_at' => new DateTime('now'),
        ]);
    }
}
