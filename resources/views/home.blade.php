@extends('layout')

@section('content')

<h1>Welcome to Homepage</h1>

@foreach(Session::get('Data') as $data)
{{$data}}
@endforeach


{{
	Session::get('Prince'),
	Session::reflash('Prince')
}}
@endsection