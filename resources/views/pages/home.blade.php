@extends('layouts.base')

@section('content')
    <img src="{{ asset('images/drapeau.png') }}" class="rounded shadow-md h-32 mt-12" alt="Profil">

    <h1 class="text-green-900 text-3xl sm:text-5xl  font-semibold mt-5">Hello from Bénin!</h1>
    <p class=" text-lg text-gray-800">It's currently {{ date('h:i A')}}.</p>
    <!--date('d/m/y')-->
    

@endsection
