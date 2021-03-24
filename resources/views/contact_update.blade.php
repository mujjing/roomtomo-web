@extends('layouts.front_side')
@section('title', 'Sumitomo_contact')
@section('content')
        <div class="header">
            お問い合わせ
        </div>
        <div class="info">
            <div class="panel-body">
                <form method="post" action="{{ route('contact.update', $show_id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" name="title">タイトル</label><span class="required">必須</span>
                    <br>
                    <input type="text" name="title" class="form-control" value="" />
                </div>

                <div class="form-group">
                    <label for="content" name="content">内容</label><span class="required">必須</span>
                    <br>
                    <textarea name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="作成" class="btn btn-primary">
                    </form>
                    <a href="{{ route('contact.read', $show_id) }}" class="btn btn-danger">戻る</a>
                </div>
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