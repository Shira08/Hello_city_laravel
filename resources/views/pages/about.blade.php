@extends('base')

@section('title')
  About Us | {{config("app.name")}}
@endsection
@section('content')

    <img src="{{ asset('/img/logo.png') }}" alt="logo">        
    <p>Built with &hearts; by GOGNON Shira</p>
    <p><a href="{{route('home')}}">Revenir à la page d'acceuil</a></p>
@stop
