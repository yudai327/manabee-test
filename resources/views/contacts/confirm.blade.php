@extends('layouts.layout')

@section('title', 'プロフィール')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('head_title', 'nickname')

@section('content')
<div class="contact_form">
    <h2>お問い合わせ内容確認</h2>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="POST" action="{{ route('contacts.thanks') }}">
        @csrf
        <div class="form-group">
            <label class="sub_color" for="exampleFormControlInput1">名前</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $inputs['name'] }}" readonly>

        </div>
        <div class="form-group">
            <label class="sub_color" for="exampleFormControlInput2">Email address</label>
            <input type="text" name="email" class="form-control" id="exampleFormControlInput2" value="{{ $inputs['email'] }}" readonly>
        </div>
        <div class="form-group">
            <label class="sub_color" for="exampleFormControlTextarea1">お問い合わせ内容</label>
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="5" readonly>{{ $inputs['comment'] }}</textarea>
        </div>
        <div class="center">
            <button type="submit" name="action" class="btn btn-primary" value="back">
                入力内容修正
            </button><br>
            <button type="submit" name="action" class="btn btn-primary" value="submit">
                送信する
            </button>
        </div>
    </form>



    <!-- <form method="POST" action="{{ route('contacts.thanks') }}">
    {{ csrf_field() }}

    <label>メールアドレス</label>
    {{ $inputs['email'] }}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden">

    <label>名前</label>
    {{ $inputs['name'] }}
    <input name="name" value="{{ $inputs['name'] }}" type="hidden">


    <label>お問い合わせ内容</label>
    {{ $inputs['comment'] }}
    <input name="comment" value="{{ $inputs['comment'] }}" type="hidden">

    <button type="submit" name="action" value="back">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form> -->
</div>
@endsection