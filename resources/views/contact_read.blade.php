@extends('layouts.front_side')
@section('title', 'Sumitomo_contact')
@section('content')
        <div class="header">
            お問い合わせ
        </div>
        <div class="info">
            <div class="panel-body">
                @foreach($contactData as $data)
                <div class="form-group">
                    <label for="title" name="title">タイトル</label>
                    <br>
                    <p class="form-control">{{ $data->title }}</p>
                </div>

                <div class="form-group">
                    <label for="content" name="content">内容</label>
                    <br>
                    <p class="form-control">{{ $data->content }}</p>
                </div>
                <div class="form-group">
                @if ($userID == $data->user_id)
                    <a href="{{ route('contact.update.show' , $data->contact_id) }}" class="btn btn-primary">修正する</a>
                    <a href="{{ route('contact.show') }}" class="btn btn-danger">戻る</a>
                @else 
                    <a href="{{ route('contact.show') }}" class="btn btn-danger">戻る</a>
                @endif
                </div>
                @endforeach
            </div>
        </div>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                <li>必須項目を確認してください</li>
            </ul>
        </div>
        @endif
@endsection