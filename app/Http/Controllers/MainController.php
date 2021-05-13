<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suit;

class MainController extends Controller
{
    //
    public function index() {
        return view('home');
    }

    // public function articles() {
    //     $articles = Suit::all();
    //     // @dd($articles);
    //     $data = [
    //         'articles' => $articles
    //         ];
    //     return view('articles', $data);
    // }
}
