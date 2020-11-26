<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Masakan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index() {
         return view('index');
     }

    public function masakan(){
        $masakan = Masakan::all();
        return view('masakan', ['masakan' => $masakan]);
    }

    public function resep()
    {
        return view('resep');
    }

    public function restoran()
    {
        return view('restoran');
    }

    public function wisata()
    {
        return view('wisata');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
