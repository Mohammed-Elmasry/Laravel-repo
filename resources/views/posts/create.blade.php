@extends('layouts.app')
<form method="POST" action="{{route('posts.store')}}">
  @csrf
  <div class="form-group">
    <input type="text" class="form-control" name="title" placeholder="Insert title here...">

    <textarea name="description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <select>
    @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
    </select>
    @endforeach
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>