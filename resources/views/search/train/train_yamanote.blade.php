@extends('layouts.front_side')
@inject('RoomConst', 'App\Consts\RoomConst')
@section('title', 'Sumitomo_search_area')
@section('content')
역이름으로 찾기
<form action="{{ route('search.area.post') }}" name="form" method="POST">
    @csrf
    <div class="train">
        山手線<br>
        @foreach ($RoomConst::STATION3 as $key => $value)
        <input type="checkbox" name="search_area[]" value="{{ $key }}" id="area_check" class="tokyo_area_check" onchange="checkBox(this)"> {{$value}}
        @endforeach
    </div>
    <button type="submit" id="search_button" class="btn btn-primary" disabled>検索する</button>
    </form>

<script>
function checkBox(checked){
    
    if( checked.checked==true ){
        count =  $('#area_check:checked').length;
        buttonStatus(count);
    }else {
        count =  $('#area_check:checked').length;
        buttonStatus(count);
    }
}

function buttonStatus(count) {

    if (count == 0) {
        document.getElementById("search_button").disabled = true;
    } else {
        document.getElementById("search_button").disabled = false;
    }
}
</script>
@endsection