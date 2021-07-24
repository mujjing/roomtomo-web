@extends('layouts.front_side')
@inject('RoomConst', 'App\Consts\RoomConst')
@section('title', 'Roomtomo_search_station')
@section('content')

    <div class="train_list">
        電車の種類選択<br>
        <ul>
        @foreach ($RoomConst::TRAIN as $key => $value)
            <li><a href="{{ $key }}">{{$value}}</a></li>
        @endforeach
        </ul>
    </div>

@endsection