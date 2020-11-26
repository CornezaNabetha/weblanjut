<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function hello(){
    	return('Selamat Datang Gais');
    }
    public function about(){
    	return('NAMA : CORNEZA NABETHA NURIL IZZA HADNE <br> NIM : 1931710017');
    }
    public function articles($id){
    	return('Halaman artikel dengan id '. $id);
    }
}
