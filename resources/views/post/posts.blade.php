@extends('layouts.nav')
@section('content')
<!-- On tables -->
<a href="{{url('/index')}}" class="btn btn-primary">add post</a>
<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>
              <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">edit</a>
              <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </table>
@endsection