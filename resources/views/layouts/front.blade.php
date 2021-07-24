<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/571aadaefb.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/sidemenu_style.css">
    <title>@yield('title')</title>
</head>
<body>

    <div class="wrapper">
        <div class="sidebar">
            <img src="../images/sumitomo_logo.png" alt="logo" class="logo_img">
            <h2 class="h2_title">Roomtomo</h2>
                <ul class="ul_contact">
                @if (auth()->user() == null)
                <li><a href="/"><i class ="fas fa-home"></i>ホーム</a></li>
                @else
                    <li><a href="/home"><i class ="fas fa-home"></i>ホーム</a></li>
                @endif
                    <li><a href="#"><i class ="fas fa-address-card"></i>Roomtomo紹介</a></li>
                    <li><a href="{{ route('contact.show') }}"><i class ="fas fa-address-book"></i>お問い合わせ</a></li>
                </ul>
                <div class="search_group">
                    <div class="search_buttons">
                        <a href="{{ route('search.area') }}"><img src="../images/area.png" alt="エリアから探す" class="search_img1"></a>
                    </div>
                    <div class="search_buttons">
                        <a href="{{ route('search.station') }}"><img src="../images/station.png" alt="エリアから探す" class="search_img2"></a>
                    </div>
                </div>
                <div class="sign_in">
                    <div class="login_buttons">
                    @if (auth()->user() == null)
                        <a href="{{ route('login') }}"><img src="../images/login.png" alt="login" class="login_img"></a>
                        <a href="{{ route('register') }}"><img src="../images/join.png" alt="join" class="join_img"></a>
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="../images/logout.png" alt="login" class="login_img"></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endif
                    </div>
                </div>
                <div class="social_media">
                    <a href="#"><i class ="fab fa-facebook-square"></i></a>
                    <a href="#"><i class ="fab fa-twitter"></i></a>
                    <a href="#"><i class ="fab fa-instagram"></i></a>
                </div>
        </div>
        <div class="main_content">
            @yield('content')
        </div>
    </div>
</body>
</html>