@extends('layouts.app')

@section('content')

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

@endsection