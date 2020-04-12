@section('header')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>





<!-- <div class="mobile-menu__cover"></div>
<div class="nav-trigger"></div>
<header class="header">
    <div class="header__inner appear up">
        <div class="logo item">
            <a href="{{ route('index') }}">
                <span class="logo__stay">@yield('head_title')</span>
            </a>
        </div>
        @guest
        <nav class="header__nav">
            <ul class="header__ul">
                <input type="text">
                <li class="header__li item"><a href="#">動画投稿</a></li>
                <li class="header__li item">
                    <a class="btn filled" href="#">新規アカウント作成</a>
                </li>
                <li class="header__li item">
                    <a class="btn filled" href="#">ログイン</a>
                </li>
            </ul>
        </nav>
        <nav class="mobile-menu__container">
            <div class="mobile-menu__box"><i class="fas fa-video"></i></div>
            <div class="mobile-menu__box"><i class="fas fa-search"></i></div>
            <button class="mobile-menu__btn"><i class="fas fa-sign-in-alt"></i>
            </button>
        </nav>
        @else
        <nav class="header__nav">
            <ul class="header__ul">
                <input type="text">
                <li class="header__li item"><a href="#">動画投稿</a></li>
                <li class="header__li item">
                    <a href="#">お知らせ</a>
                </li>
                <li class="header__li item"><a href="#">アカウント情報</a></li>
            </ul>
        </nav>
        <nav class="mobile-menu__container">
            <div class="mobile-menu__box"><i class="fas fa-video"></i></div>
            <div class="mobile-menu__box"><i class="fas fa-search"></i></div>
            <button class="mobile-menu__btn"><i class="far fa-user-circle"></i>
            </button>
        </nav>

        @endguest
    </div>
</header> -->
@endsection