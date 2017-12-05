@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <aside class="col-md-3">
        <div class="sidebar mt-3 card card-shadow">
          <div class="filter pt-2">
            <h3>Categories</h3><hr>
            <ul class="filter-list">
                <li>
                  <a href="/">All</a>
                </li>
              @foreach(App\Category::all() as $category)
                <li>
                  <a href="?category={{$category->id}}">{{$category->name}}</a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </aside>
      <main class="col-md-9">
        <div class="post card mt-3 card-shadow">
          <ul class="post-list">
            @foreach($posts as $post)
            <li class="post-container">
              <img src="img/{{$post->featuredimg}}" width="100%" alt="">
              <div class="post-excerpt">
              <span class="category"><a href="?category={{$post->category->id}}">{{$post->category->name}}</a></span>
              <a href="posts/{{$post->id}}">
                <h3>{{$post->title}}</h3>
                <p>{{str_limit($post->body,100)}}</p>
              </a>
                <img src="{{$post->user->avatar}}" width="30px" alt="">
                <small><i>by {{$post->user->name}} {{$post->created_at->diffForHumans()}}</i></small>
              </div>
            </li>
            @endforeach
            <span class="float-right">{{$posts->links()}}</span>
          </ul>
        </div>
      </main>
    </div>
  </div>
@endsection