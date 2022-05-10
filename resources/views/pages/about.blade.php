@extends('base')

@section('title')
  About Us | {{config("app.name")}}
@endsection
@section('content')

    <img src="{{ asset('public/img/logo.png') }}" class="rounded-full my-12 shadow-md" alt="logo">        
    <h2 class="text-gray-700">
      Built with <span class="text-pink-500">&hearts;</span> by GOGNON Shira
    </h2>
    <p class="mt-5"><a class="text-indigo-500 hover:text-indigo-600 underline" href="{{route('home')}}">Revenir à la page d'acceuil</a></p>
@stop
