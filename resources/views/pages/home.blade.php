@extends('base')

@section('content')
    <img src="/img/user_profil.png" alt="Profil">

    <h1>Hello from Bénin!</h1>
    <p>It's currently {{ date('h:i A')}}.</p>
    <!--date('d/m/y')-->
    

@endsection
