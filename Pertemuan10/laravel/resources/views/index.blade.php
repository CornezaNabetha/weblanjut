<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Home</title>
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
      <!-- @can('user-display')
      <a class="nav-link active" href="index">Home <span class="sr-only">(current)</span>
      @endcan
      </a>
      <li>
      @can('user-display')
      <a class="nav-link" href="masakan">Masakan</a>
      @endcan
      </li>
      <li>
      @can('user-display')
      <a class="nav-link" href="restoran">Restaurant</a>
      @endcan
      </li>
      <li>
      @can('user-display')
      <a class="nav-link" href="wisata">Wisata Kuliner</a>
      @endcan
      </li>
      <li>
      @can('manage-articles')
      <a class="nav-link" href="manage">kelola</a>
      @endcan
      </li>
      <li>
      @can('user-display')
      <a class="nav-link" href="https://www.instagram.com/pesonaindonesiaofficial">Contact</a>
      @endcan
      </li> -->
    
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
        @can('user-display')
        <a class="nav-link active" href="index">Home <span class="sr-only">(current)</span></a>
        <li><a class="nav-link" href="masakan">Masakan</a></li>
        <li><a class="nav-link" href="restoran">Restaurant</a></li>
        <li><a class="nav-link" href="wisata">Wisata Kuliner</a></li>
        @endcan
        <li>
          @can('manage-articles')
          <a class="nav-link" href="manage">kelola</a>
          @endcan
        </li>
        <li>
          @can('user-display')
          <a class="nav-link" href="https://www.instagram.com/pesonaindonesiaofficial">Contact</a>
          @endcan
        </li>
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


<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
  <img src = "img/foto1.jpg" width="300" >
    <u><i><h1 class="display-4">Masakan Internasional</h1></i></u>
    <u><i><p class="lead">Food Prawn Asia</p></u></i>
    <button type="button" class="btn btn-dark">Read More...</button>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1>About</h1>
    </div>
  </div>

  <div class="row">
    <div class="col text-center">
      <p>Makanan Internasional adalah makanan yang sumber-sumber bahan makanannya berasal dari negara tersebut dan mempunyai karakter makanan khas negara tersebut.
      Makanan enak dan terkenal di dunia banyak macamnya karena disetiap negara mempunyai makanan khas yang membedakan dengan makanan negara lain.</p>
    </div>
    <div class="col text-center">
      <p>Perbedaan Makanan Internasional dengan Makanan Khas. Makanan Internasional adalah makanan yang sudah terkenal dipenjuru dunia.
      Sedangkan Makanan Khas daerah adalah makanan yang biasa dikonsumsi di suatu daerah tersebut dan mempunyai cita rasa yang khas yang mencerminkan karakter masyarakat disana.</p>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col text-center">
    <h1>Resep Terbaru</h1>
  </div>
</div>

<div class="row">
  <div class="col">
        <div class="card" >
      <img src="img/foto2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Makanan laut atau hidangan laut adalah sebutan untuk makanan berupa hewan dan tumbuhan laut yang ditangkap, dipancing, diambil dari laut maupun hasil budidaya.</p>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/foto3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Makanan laut atau hidangan laut adalah sebutan untuk makanan berupa hewan dan tumbuhan laut yang ditangkap, dipancing, diambil dari laut maupun hasil budidaya.</p>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/foto8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Squash adalah sirup pekat non-alkohol yang digunakan dalam pembuatan minuman</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
        <div class="card" >
      <img src="img/foto5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Cake adalah kue yang terbuat dari campuran adonan, terdiri dari tepung, gula, telur dan bahan lain yang dikembangkan dengan atau tanpa bahan pengembang.</p>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/foto6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ice cream adalah sebuah makanan beku dibuat dari produk susu seperti krim atau sejenisnya, digunakan dengan perasa dan pemanis. </p>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/foto7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Dessert adalah sajian yang disajikan diakhir courses dalam suatu set menu yang gunanya untuk menghilangkan kesan rasa hidangan yang terdahulu dan menutup babak penyajian makanan.</p>
      </div>
    </div>
  </div>
</div>
</div>


<!-- FOOTER -->
<footer class="container">
        <p style="text-align: center;">&copy; Corneza Nabetha ~ Serba Serbi Resep </p>
      </footer>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>