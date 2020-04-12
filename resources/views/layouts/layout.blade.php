<DOCTYPE HTML>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    </head>

    <body>
        <div id="app">
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
                            <form class="form-inline my-2 my-lg-0 ml-auto">
                                <input class="form-control mr-sm-2" type="text" placeholder="検索..." aria-label="検索...">
                                <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
                            </form>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contacts.index') }}">お問い合わせ</a>
                            </li>

                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">登録</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    お知らせ
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @foreach($pushes as $push)
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item write_space_normal" href="#">{{ $push->comment }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">マイページへ</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('home') }}">アカウント情報の変更</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('home') }}">購入済み動画一覧</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('home') }}">投稿動画一覧</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('home') }}">当サイトについて</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('home') }}">よくある質問</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        ログアウト
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
            <main class="py-4 content-width">
                @yield('content')
            </main>
            <footer class="footer">
                <div class="footer__container">
                    <div class="footer__item">
                        <a href="./">
                            <div class="footer__icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <span>ホーム</span>
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="./">
                            <div class="footer__icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <span>お気に入り</span>
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="./">
                            <div class="footer__icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <span>購入済</span>
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="./">
                            <div class="footer__icon">
                                <i class="far fa-star"></i>
                            </div>
                            <span>お気に入り</span>
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="./">
                            <div class="footer__icon">
                                <i class="far fa-user-circle"></i>
                            </div>
                            <span>アカウント</span>
                        </a>
                    </div>
                </div>
            </footer>

        </div>
    </body>

    </html>




