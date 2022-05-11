<?php
use Illuminate\Support\Facades\Route;

Route::name('home')->get('/', function(){
      return view('pages/home');
});
/*Route::get('/about-us', function(){
      return view('pages/about');
    })->name('about');*/
Route::view('/about-us', 'pages/about')-> name('about');

//Route::get('/about-us', fn() => view('pages/about'))-> name('about');