@extends('layouts.front_side')
@inject('RoomConst', 'App\Consts\RoomConst')
@section('title', 'Roomtomo_search')
@section('content')

<h3>検索結果は {{count($list)}}件です。</h3>

    <div class="search_result">
        <table class="table table-bordered table-striped">
            <tr>
                <th>所在地</th>
                <th>沿線・駅</th>
                <th>物件写真</th>
                <th>物件名</th>
                <th>家賃</th>
                <th>専有面積</th>
                <th>間取り</th>
                <th>お気に入り</th>
            </tr>
            @foreach ($list as $data)
            <tr>
            <form action="{{ route('search.area.favoriate') }}" name="form" method="POST">
            @csrf
                <td>{{\App\Consts\RoomConst::getCityName($data->city)}}</td>
                @if ($data->train2 == null && $data->train3 == null)
                <td>{{\App\Consts\RoomConst::getTrainName($data->train1)}} 「{{\App\Consts\RoomConst::getStationName($data->station)}}」駅から6分</td>
                @elseif ($data->train2 != null && $data->train3 == null)
                <td>{{\App\Consts\RoomConst::getTrainName($data->train1)}} & {{\App\Consts\RoomConst::getTrainName($data->train2)}} 
                <br>「{{\App\Consts\RoomConst::getStationName($data->station)}}」駅から6分</td>
                @elseif ($data->train2 != null && $data->train3 != null)
                <td>{{\App\Consts\RoomConst::getTrainName($data->train1)}} & {{\App\Consts\RoomConst::getTrainName($data->train2)}} & {{\App\Consts\RoomConst::getTrainName($data->train3)}} 
                <br>「{{\App\Consts\RoomConst::getStationName($data->station)}}」駅から6分</td>
                @endif
                <td><a href="{{ $data->roomImg_url }}"><img src="{{ $data->roomImg_url }}" style="max-width: 100px;max-height: 100px;height: 100%;width: 100%;"></a></td>
                <td>{{ $data->room_name }}</td>
                <td>{{ $data->price }}万円</td>
                <td>{{ $data->room_py }}m2</td>
                <td>{{ $data->type }}</td>
                @if (auth()->user() == null)
                <td><button type="submit" class="btn btn-primary"" disabled>お気に入り</button></td>
                @else
                <input type="hidden" name="room_id" value="{{ $data->room_id }}">
                <td><button type="submit" class="btn btn-primary"">お気に入り</button></td>
                @endif
                </form>
            </tr>
            @endforeach
        </table>
    </div>
@endsection