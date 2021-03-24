@extends('layouts.front_side')
@section('title', 'Sumitomo_contact')
@section('content')
        <div class="header">
            お問い合わせ
        </div>
        <div class="info">
            <div class="panel-body">
                <div class="table-responsive">
                <form method="get" action="{{route('contact.create.show')}}">
                    @csrf
                    <div class="create_button" align="left">
                        <button type="submit" class="btn btn-primary"">問い合わせを作成</button>
                    </div>
                    </form>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">タイトル</th>
                            <th style="text-align:center;">作成日時</th>
                        </tr>
                        @if($contactData != null)
                        @foreach($contactData as $data)
                        <tr>
                            <td>{{ $data->contact_id }}</td>
                            <td><a href="{{route('contact.read', $data->contact_id)}}">{{ $data->title }}</a></td>
                            <td>{{ $data->application_at }}</td>
                        </tr>
                            @endforeach
                        @else 
                        <tr>
                            <td colspan='3' style="text-align:center;">お問い合わせがありません</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
@endsection