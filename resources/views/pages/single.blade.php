@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-3">
        <img src="/img/{{$post->featuredimg}}" width="100%" alt="">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <div id="disqus_thread"></div>
      </div>
    </div>
  </div>
@endsection