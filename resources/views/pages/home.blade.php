@extends('base')

@section('content')
    <img src="{{ asset('/img/drapeau.png') }}" alt="Profil">

    <h1>Hello from Bénin!</h1>
    <p>It's currently {{ date('h:i A')}}.</p>
    <!--date('d/m/y')-->
    

@endsection
