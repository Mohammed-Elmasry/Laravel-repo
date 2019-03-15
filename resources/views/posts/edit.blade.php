@extends('layouts.app')
<form method="POST" action="{{route('posts.update')}}">
  @csrf
  @put
  <div class="form-group">
    <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Insert title here...">

    <textarea name="description" value="{{$post->description}}" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>