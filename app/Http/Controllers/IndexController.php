<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $news=News::all();

        return view("index", ["news" => $news]);

    }

    public function signin(Request $request) {
        $request->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);
        if (auth()->attempt(["email" => $request->email,
                             "password" => $request->password])) {
            return redirect("bklase");
        }
        else{
            return "failed";
        }
    }
    
    public function logout() {
        auth()->logout();

        return redirect("/");
    }
    public function brivlaiki() {
        return view("brivdienas");
    }
}