<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use Illuminate\Http\Request;

class BklaseController extends Controller
{
    public function index(){
        $news=News::all();

        return view("bklase", ["news" => $news]);

    }
}