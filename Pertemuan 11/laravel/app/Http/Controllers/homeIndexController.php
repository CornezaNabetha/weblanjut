<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeIndexController extends Controller
{
    public function index(){
        return view('home.indexHome');
    }
}
