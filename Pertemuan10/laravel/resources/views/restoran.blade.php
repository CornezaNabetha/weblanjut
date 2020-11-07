<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>resto</title>
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
    </div>
  </div>
  </div>
</nav>

<div class ="container">
<nav aria-label="breadcrumb">
<div class ="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Restoran</li>
  </ol>
  </div>
</nav>



<div class="container">
<div class="col">
  <div class="row">
    <div class="col text-left">
    <h1>Restaurant Indonesia</h1>
  </div>
</div>


<div class="row">
  <div class="col">
        <div class="card" >
      <img src="img/r1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Spa Cafe - Ayana Resort and Spa</p>
        <b><p class="card-text">AYANA Resort and Spa, Jl. Karang Mas Sejahtera, Jimbaran, Bali</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Ubud Village - Ubud Village Hotel</p>
        <b><p class="card-text">Village Hotel, Jl. Monkey Forest, Ubud, BaliUbud</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Sling Bar - Double Six Luxury Hotel</p>
        <b><p class="card-text">Double Six Luxury Hotel, Jl. Double Six, Seminyak, Bali</p></b>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col">
        <div class="card" >
      <img src="img/r4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Hiu Restaurant & Wine Lounge</p>
        <b><p class="card-text">Jl. Pantai Kedonganan No. 888, Kedonganan-Jimbaran, Jimbaran, Bali</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Two Dragons</p>
        <b><p class="card-text">Ngurah Rai International Airport, Jl. I Gusti Ngurah Rai, Denpasar, Bali</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r12.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">SaigonSan</p>
        <b><p class="card-text">Jalan Kahuripan, Kecamatan Klojen, Kota Malang, Jawa Timur (0341) 353935</p></b>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col">
        <div class="card" >
      <img src="img/r6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <p>Abhayagiri Restaurant, Sumberwatu Heritage Resort</p>
        <b><p class="card-text">Dusun Sumberwatu RT. 002 / RW. 001, Sambirejo, Prambanan, Yogyakarta
(0274) 4469277</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <p>Kencono Restoran, Queen of the South Beach Resort</p>
        <b><p class="card-text">Girijati, Purwosari, Gunungkidul, Yogyakarta
(0274) 367196</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <p>Canting Restaurant</p>
        <b><p class="card-text">Galeria Mall, Jl. Jend. Sudirman No.99-101, Terban, Gondokusuman,Yogyakarta
(0274) 580905</p></b>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
        <div class="card" >
      <img src="img/r9.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <p>Javanine Resto</p>
        <b><p class="card-text"> Jl. Pahlawan Trip A5, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 
(0341) 557989</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <p>Djati Lounge</p>
        <b><p class="card-text">Cluster Greenwood, Jl. Greenwood Golf Mansion No. 49, Araya, Tirtomoyo, Pakis, Boro Teronggo, Malang, Jawa Timur
(0341) 3039888</p></b>
      </div>
    </div>
  </div>
  <div class="col">
        <div class="card">
      <img src="img/r8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <p>Taman Indie River View</p>
        <b><p class="card-text">Jl. Araya Megah No.9, Pandanwangi, Blimbing, Kota Malang, Jawa Timur
(0341) 417777</p></b>
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