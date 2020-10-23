<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>kelola</title>
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
      <li><a class="nav-link" href="manage">Kelola</a></li>
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




<table class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>Judul</th>
<th>gambar</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($masakan as $a)
<tr>
<td>{{$a->id}}</td>
<td>{{$a->judul}}</td>
<td>{{$a->gambar}}</td>
<td>

<a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
<a href="article/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>

<a href="article/add" class="btn btn-primary">Tambah Data</a>




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