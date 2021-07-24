<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/571aadaefb.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sidemenu_style.css') }}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Roomtomo_contact</title>
</head>
<body>

    <div class="wrapper">
        <div class="sidebar">
            <img src="{{ asset('images/sumitomo_logo.png') }}" alt="logo" class="logo_img">
            <h2 class="h2_title">Roomtomo</h2>
                <ul class="ul_contact">
                    <li><a href="/home"><i class ="fas fa-home"></i>ホーム</a></li>
                    <li><a href="#"><i class ="fas fa-address-card"></i>Roomtomo紹介</a></li>
                    <li><a href="{{ route('contact.show') }}"><i class ="fas fa-address-book"></i>お問い合わせ</a></li>
                </ul>
                <div class="search_group">
                    <div class="search_buttons">
                        <a href="#"><img src="{{ asset('images/area.png') }}" alt="エリアから探す" class="search_img1"></a>
                    </div>
                    <div class="search_buttons">
                        <a href="#"><img src="{{ asset('images/station.png') }}" alt="エリアから探す" class="search_img2"></a>
                    </div>
                </div>
                <div class="sign_in">
                    <div class="login_buttons">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{ asset('images/logout.png') }}" alt="login" class="login_img"></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="social_media">
                    <a href="#"><i class ="fab fa-facebook-square"></i></a>
                    <a href="#"><i class ="fab fa-twitter"></i></a>
                    <a href="#"><i class ="fab fa-instagram"></i></a>
                </div>
        </div>
        <div class="main_content">
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
        </div>
    </div>
</body>
</html>