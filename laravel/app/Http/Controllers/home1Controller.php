<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class home1Controller extends Controller
{
    public function invoke(Request $request){
        //"\app\article == model"
        //get=menampilkan semua data di database,first = 1 data
        $articles = \App\Article::all();
        $value = Cache::rememberForever('reseps',function(){
        });
        $page = 'resep';
        return view('index',[
            'index'=>$articles,
            'halaman' => $page
            //halaman dipanggil di view

            //public function index(){
            //  $hasil = Article::all();
            //  return view('home.parent',['hasil'=>$hasil]);

    
    
        //public function hello(){
        //	return('Selamat Datang Gais');
        ]);
    }
        public function index(){
            return view('index');        }

            public function masakan(){
                return view('masakan');        }

                public function resep(){
                    return view('resep');        }

                    public function restoran(){
                        return view('restoran');        }

                        public function wisata(){
                            return view('wisata');        }

                            public function kontak(){
                                return view('kontak');        }


    }


