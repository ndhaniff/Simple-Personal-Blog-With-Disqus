@extends('layouts.app') @section('content')
<<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Create Post</h3>
    </div>
    <div class="card-body">
      <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="featuredimage">Image</label>
          <input type="file" class="form-control" name="featuredimage" accept=".jpg,.jpeg,.png">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn">Submit</button>
        {{csrf_field()}}
      </form>
    </div>
  </div>
  </div>
  @endsection