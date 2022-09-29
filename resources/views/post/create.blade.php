@extends('layouts.nav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form style="margin: 5%;" action="{{url('/create')}}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title"><br><br>
        <input type="text" name="description" placeholder="description"><br><br>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
</body>
</html>
@endsection
