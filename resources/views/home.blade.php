<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ URL::asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sean's Blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
            @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">Admin</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            @endauth
            @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts AS $post)
            <div class="post-preview">
              <a href="/post/{{$post->id}}">
                <h2 class="post-title">
                  {{$post->title}}
                </h2>
              </a>
              <p class="post-meta">Posted by
                <a href="#">{{$post->poster->name}}</a>
                on </p>
            </div>
            <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix" style="float:right">
          {{ $posts->links() }}
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="">Sean Onslow</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  {{--<script src="js/clean-blog.min.js"></script>--}}

</body>

</html>
