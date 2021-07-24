@extends('layouts.front_top')
@section('title', 'Roomtomo')
@section('content')
    <div class="home_header">
        <h2>部屋探しはここで！</h2>
        <br><br><br>
        <img src="../images/mainTitle.png" alt="main_title" class="main_title">
        <br><br><br>
        <a href="{{ route('search.show') }}"><img src="../images/search.jpg" alt="search" class="home_search"></a>
    </div>
@endsection