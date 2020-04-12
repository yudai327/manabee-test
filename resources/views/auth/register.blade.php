@extends('layouts.layout')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')


@section('content')
<section>
    <div class="contact_form">
        <h2>会員登録</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">名前</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="例）平田太郎" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">

                <label for="nickname">ニックネーム</label>
                <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" placeholder="例）beetles" 　value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                @error('nickname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="PC・携帯どちらでも可" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">パスワード</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="8文字以上１６文字以内の半角英数字" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">

                <label for="password-confirm">パスワード（確認用）</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 　placeholder="8文字以上１６文字以内の半角英数字" required autocomplete="new-password">
            </div>
<br>
            <div class="form-group center">
                <button type="submit" class="btn btn-primary w_100">登録</button>
            </div>
        </form>
    </div>
</section>
@endsection