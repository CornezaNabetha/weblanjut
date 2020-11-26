<?php

namespace App\Http\Controllers;

use App\Masakan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PDF;

class home1Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-articles')) {
                return $next($request);
            }

            abort(403, 'Anda tidak memiliki cukup hak akses');
        });

    }

    public function index()
    {
        // $masakan = Masakan::all();
        // return view('masakan', ['masakan' => $masakan]);
    }

    public function manage()
    {
        $masakan = Masakan::all();
        return view('manage', ['masakan' => $masakan]);
    }

    public function add()
    {
        return view('addarticle');
    }

    public function create(Request $request)
    {
        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('img', 'public');
        }
        Masakan::create([
            'judul' => $request->judul,
            'gambar' => $image_name,
        ]);
        return redirect('/manage');
    }

    public function edit($id)
    {
        $article = Masakan::find($id);
        return view('editarticle', ['article' => $article]);
    }

    public function update($id, Request $request)
    {
        $article = Masakan::find($id);

        // dd($request->all());
        $article->judul = $request->judul;
        if ($article->gambar && file_exists(storage_path('app/public/' . $article->gambar))) {
            \Storage::delete('public/' . $article->gambar);
        }
        $image_name = $request->file('gambar')->store('img', 'public');
        $article->gambar = $image_name;

        $article->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $article = Masakan::find($id);
        $article->delete();
        return redirect('/manage');
    }

    public function cetak_pdf()
    {
        $article = Masakan::all();
        $pdf = PDF::loadview('articles_pdf', ['article' => $article]);
        return $pdf->stream();
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
    //     //    return('Selamat Datang Gais');
    //     ]);
    // }

    // public function index(){
    //   return view('index');        }


    //                             public function manage(){
    //                                 $article = Article::all();
    //                             return view('manage',['article' => $article]);
    //                             }

    public function manageUser() {
        $user = User::all();
        return view('manageUser', ['user' => $user]);
    }

    public function editProfile($id) {
        $profile = User::find($id);
        return view('editProfile', ['profile' => $profile]);
    }

    public function updateProfile($id, Request $request)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->foto && file_exists(storage_path('app/public/' . $user->foto))) {
            \Storage::delete('public/' . $user->foto);
        }
        $image_name = $request->file('gambar')->store('img', 'public');
        $user->foto = $image_name;

        $user->save();
        return redirect('/manageUser');
    }

    public function cetak_pdf_user()
    {
        $user = User::all();
        $pdf = PDF::loadview('users_pdf', ['user' => $user]);
        return $pdf->stream();
    }

}
