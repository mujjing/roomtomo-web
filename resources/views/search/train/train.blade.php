@extends('layouts.front_side')
@inject('RoomConst', 'App\Consts\RoomConst')
@section('title', 'Roomtomo_search_area')
@section('content')
역이름으로 찾기

    <div class="train">
        電車の種類選択<br>
        @foreach ($RoomConst::CITY_TOKYO as $key => $value)
        <input type="checkbox" name="search_area" value="{{ $key }}" id="tokyo_area_check" class="tokyo_area_check"> {{$value}}
        @endforeach
    </div>
    <a href="#" class="btn btn-primary">検索する</a>
@endsection