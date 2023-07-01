@extends('layout.master')
@section('title','app - home')

@section('content')
@for ($i = 1; $i < 30; $i++)
    <h1> {{$i}} this is home page</h1>
@endfor
@endsection