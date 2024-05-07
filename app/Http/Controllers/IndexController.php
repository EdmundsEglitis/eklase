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

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (auth()->attempt($credentials)) {
            return redirect()->intended('bklase');
        }
    
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'E-pasts vai parole nav pareiza.',
        ]);
    }
    
    public function logout() {
        auth()->logout();

        return redirect("/");
    }
    public function brivlaiki() {
        return view("brivdienas");
    }
}