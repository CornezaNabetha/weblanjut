<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masakan;

class home1Controller extends Controller
{
    public function index(){
        $masakan = Masakan::all();
        return view ('masakan',['masakan'=>$masakan]);
    }

    public function manage(){
$masakan = Masakan::all();
return view('manage',['masakan' => $masakan]);
}

public function add()
 {
 return view('addarticle');
 }

 public function create(Request $request)
 {
    Masakan::create($request->all());
    return redirect('/manage');
 }

 public function edit($id)
 {
 $article = Masakan::find($id);
 return view('editarticle',['article'=>$article]);
 }

 public function update($id, Request $request)
 {
 $article = Masakan::find($id);
 $article->judul = $request->judul;
 $article->gambar = $request->gambar;
 $article->save();
 return redirect('/manage');
 }

 public function delete($id)
 {
 $article = Masakan::find($id);
 $article->delete();
 return redirect('/manage');
 }

    // public function invoke(Request $request){
    //     //"\app\article == model"
    //     //get=menampilkan semua data di database,first = 1 data
    //     $articles = \App\Article::all();
    //     $value = Cache::rememberForever('reseps',function(){
    //     });
    //     $page = 'resep';
    //     return view('index',[
    //         'index'=>$articles,
    //         'halaman' => $page
    //         //halaman dipanggil di view

    //         //public function index(){
    //         //  $hasil = Article::all();
    //         //  return view('home.parent',['hasil'=>$hasil]);

    
    
    //     //public function hello(){
    //     //	return('Selamat Datang Gais');
    //     ]);
    // }
           
        // public function index(){
          //   return view('index');        }

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

    //                             public function manage(){
    //                                 $article = Article::all();
    //                             return view('manage',['article' => $article]);
    //                             }



    }