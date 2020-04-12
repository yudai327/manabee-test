@extends('layouts.layout')

@section('title', 'プロフィール')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('head_title', 'nickname')

@section('content')

<section>
    <div class="contact_form">
        <h2>お問い合わせフォーム</h2>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



        <form method="POST" action="{{ route('contacts.confirm') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">名前</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="平田太郎" value="{{ Auth::check() ? $auth->name:  ''}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" value="{{ Auth::check() ? $auth->email:  ''}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">お問い合わせ内容</label>
                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="center">
                <button type="submit" class="btn btn-primary">確認</button><br>
                <a href="{{ route('contacts.index') }}">キャンセル</a>
            </div>
        </form>

    </div>

</section>


@endsection