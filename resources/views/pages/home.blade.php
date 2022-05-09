@extends('base')
@section('title','Hello City')

@section('content')

    <h1>Hello from Bénin!</h1>
    <p>It's currently {{ date('h:i A')}}.</p>
    <!--date('d/m/y')-->

@endsection
