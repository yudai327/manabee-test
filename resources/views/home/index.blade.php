@extends('layouts.layout')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 d-sm-none d-md-block">
            <div class="sidebar_fixed">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action left active">マイページ</button>
                    <button type="button" class="list-group-item list-group-item-action">アカウント情報の変更</button>
                    <button type="button" class="list-group-item list-group-item-action">購入済み動画一覧</button>
                    <button type="button" class="list-group-item list-group-item-action">投稿動画一覧</button>
                    <button type="button" class="list-group-item list-group-item-action">当サイトについて</button>
                    <button type="button" class="list-group-item list-group-item-action">よくある質問</button>
                    <button type="button" class="list-group-item list-group-item-action">アプリを共有する</button>
                    <button type="button" class="list-group-item list-group-item-action" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        ログアウト
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="contact_form">
                        <p>{{$auth->name}}</p>
                        <p>{{$auth->nickname}}</p>
                        <p>{{$auth->detail}}</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">マイページ</div>
                <div class="card-body">
                    <div class="contact_form">
                        <h2>ユーザー情報</h2>
                        <div class="form-group">
                            <label for="name">名前</label>
                            <div id="name">{{$auth->name}}　<a href="{{ route('home.edit', 'name') }}">編集</a></div>
                        </div>
                        <div class="form-group">
                            <label for="nickname">ニックネーム</label>
                            <div id="nickname">{{$auth->nickname}}　<a href="{{ route('home.edit', 'nickname') }}">編集</a></div>
                        </div>

                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <div id="email">{{$auth->email}}　<a href="{{ route('home.edit', 'email') }}">編集</a></div>
                        </div>
                        <div class="form-group">
                            <label for="password">パスワード</label>
                            <div id="password">パスワードは安全のため表示できません　<a href="{{ route('home.edit', 'password') }}">編集</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection