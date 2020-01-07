@extends('layout')

@section('content')

<h1>Welcome to Login Page</h1>


@foreach($errors->all() as $errors)
<span style="color: red;">{{$errors}}</span>
@endforeach
<form action="" method="POST">
@csrf
<input type="text" name="username">
<input type="password" name="pass">
<button type="submit">Login</button>
</form>

@endsection