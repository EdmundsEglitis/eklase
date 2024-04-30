<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use Illuminate\Http\Request;

class BklaseController extends Controller
{
    public function __invoke(){
        return view('bklase',[
            'user' => auth()->user()
        ]);
    }
}