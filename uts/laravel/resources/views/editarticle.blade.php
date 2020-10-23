<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>masakan</title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-warning">
      <div class="container">
  <i><a class="navbar-brand" href="#">SERBA SERBI RESEP</a></i>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index">Home <span class="sr-only">(current)</span></a>
      <li><a class="nav-link" href="masakan">Masakan</a></li>
      <li><a class="nav-link" href="restoran">Restaurant</a></li>
      <li><a class="nav-link" href="wisata">Wisata Kuliner</a></li>
      <li><a class="nav-link" href="/manage">kelola</a></li>
      <li><a class="nav-link" href="https://www.instagram.com/pesonaindonesiaofficial">Contact</a></li>
      
      @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </div>
  </div>
  </div>
</nav>
    </div>
  </div>
  </div>
</nav>


<div class="container">
<div class="col">
<form action="/article/update/{{$article->id}}" method="post">
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$article->id}}"></br>
 <div class="form-group">
 <br><br><label for="judul">Judul</label>
 <input type="text" class="form-control"
required="required" name="judul" value="{{$article->judul}}"></br>
 </div>
 <div class="form-group">
 <label for="gambar">Gambar</label>
 <input type="text" class="form-control"
required="required" name="gambar" value="{{$article->gambar}}"></br>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
 </form>
</div>
</div>



  <!-- <div class="col-md">
 <div class="card">
  <img src="img/m3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rendang</h5>
    <p class="card-text"></p>
    <a href="https://food.detik.com/info-kuliner/d-5115157/resep-rendang-daging-sapi-yang-empuk-enak-dan-sederhana" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="col-md">
 <div class="card">
  <img src="img/m6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sup Iga Sapi</h5>
    <p class="card-text"></p>
    <a href="https://www.kompas.com/food/read/2020/07/30/170700775/resep-sop-iga-sapi-bening-masakan-untuk-rayakan-idul-adha" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

  
<div class="container">
  <div class="row">
  <div class="col-md">
 <div class="card">
  <img src="img/m5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sayur Lodeh</h5>
    <p class="card-text"></p>
    <a href="https://selerasa.com/resep-bumbu-recipe-dan-cara-memasak-membuat-sayur-lodeh-sederhana-yang-enak-dan-gurih" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

  <div class="col-md">
 <div class="card">
  <img src="img/m12.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kimchi</h5>
    <p class="card-text"></p>
    <a href="https://food.detik.com/info-kuliner/d-4970660/cara-membuat-kimchi-sendiri-di-rumah-mudah-dan-enak" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="col-md">
 <div class="card">
  <img src="img/m4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dessert Box</h5>
    <p class="card-text"></p>
    <a href="https://resepkoki.id/resep/resep-dessert-box-coklat/" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="container">
<div class="row">
  <div class="col-md">
 <div class="card">
  <img src="img/m2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gado-Gado</h5>
    <p class="card-text"></p>
    <a href="https://www.masakapahariini.com/resep/resep-gado-gado/" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

  <div class="col-md">
 <div class="card">
  <img src="img/m10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Salad</h5>
    <p class="card-text"></p>
    <a href="https://resepedia.id/resep/salad-sayur" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="col-md">
 <div class="card">
  <img src="img/m7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kebab</h5>
    <p class="card-text"></p>
    <a href="https://selerasa.com/resep-masakan-dan-cara-bikin-kebab-turki-asli-sederhana-untuk-makanan-keluarga" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md">
 <div class="card">
  <img src="img/m8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sushi</h5>
    <p class="card-text"></p>
    <a href="https://www.liputan6.com/lifestyle/read/3679928/cara-membuat-sushi-sederhana-ala-rumahan-mudah-dan-menggiurkan" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="col-md">
 <div class="card">
  <img src="img/m9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Spagetti</h5>
    <p class="card-text"></p>
    <a href="https://www.fimela.com/lifestyle-relationship/read/3763536/resep-sederhana-spaghetti-super-lezat-bisa-dibuat-di-rumah" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div>

<div class="col-md">
 <div class="card">
  <img src="img/m11.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pizza</h5>
    <p class="card-text"></p>
    <a href="https://cookpad.com/id/resep/4181944-pizza-empuk-anti-gagal" class="btn btn-primary">Click Here !</a>
  </div>
</div>
</div> -->

<!-- FOOTER -->
<footer class="container">
        <br><p style="text-align: center;">&copy; Corneza Nabetha ~ Serba Serbi Resep </p>
      </footer>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>