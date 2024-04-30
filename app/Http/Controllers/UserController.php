<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function create() {
        return view("create");
    }

    public function store(Request $request) {
        $request->validate([
            "username" => ["string", "required", "max:255", Rule::unique("users", "name")],
            "email" => ["email", "required", Rule::unique('users', 'email')],
            "password" => ["required", "min:4"]
        ]);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        session()->flash("success", "You have been registered");

        return redirect("/");
    }

}