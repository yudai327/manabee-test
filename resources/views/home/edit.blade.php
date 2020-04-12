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
                <div class="card-header">マイページ</div>

                <div class="card-body">
                    <div class="contact_form">
                        <form action="{{ route('home.update', $auth->id)}}" 　method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="page" value="{{$page}}">
                            <div class="form-contents">
                                <div class="form-one-size">
                                    @if ($page == 'name')
                                    <div class="form-input">
                                        <div class="form-label">ユーザー名</div>
                                        <div>
                                            <input class="form-input__input" type="text" name="name" value="{{$auth->name}}">
                                        </div>
                                    </div>
                                    @endif
                                    @if ($page == 'nickname')
                                    <div class="form-input">
                                        <div class="form-label">ニックネーム</div>
                                        <div>
                                            <input class="form-input__input" type="text" name="nickname" value="{{$auth->nickname}}">
                                        </div>
                                    </div>
                                    @endif
                                    @if ($page == 'email')
                                    <div class="form-input">
                                        <div class="form-label">メールアドレス</div>
                                        <div><input class="form-input__input" type="text" name="email" 　value="{{$auth->email}}"></div>
                                    </div>
                                    @endif
                                    @if ($page == 'password')
                                    <div class="form-input">
                                        <div class="form-label">現在のパスワード</div>
                                        <div><input class="form-input__input" type="password" 　name="old_password" value=""></div>
                                    </div>
                                    <div class="form-input">
                                        <div class="form-label">新パスワード</div>
                                        <div><input class="form-input__input" type="password" 　name="password" value=""></div>
                                    </div>
                                    <div class="form-input">
                                        <div class="form-label">新パスワード(確認)</div>
                                        <div><input class="form-input__input" type="password" 　name="password_confirmation" value=""></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-foot">
                                <input class="send" type="submit" value="編集">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection