@extends('layouts.front_side')
@section('title', 'Roomtomo_search')
@section('content')


    <div class="search_area">
        <button onclick="location.href='{{ route('search.area') }}' ">エリアから探す</button>
    </div>

    <div class="search_station">
        <button onclick="location.href='{{ route('search.station') }}' ">駅から探す</button>
    </div>

@endsection