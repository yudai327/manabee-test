@extends('layouts.layout')

@section('title', 'コース詳細')
@section('keywords', 'A,B,C')
@section('description', 'コースの詳細を表示します。')
@section('head_title', 'コース名')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <span>動画のタイトル</span>
                </div>
                <div>サブタイトルあれば</div>
                <div>
                    <a href="{{ route('userpages') }}">作者のニックネーム</a>
                </div>
                <div>
                    <p>コースの詳細</p>
                    <p>コースの詳細が入ります。コースの詳細が入ります。コースの詳細が入ります。
                        コースの詳細が入ります。コースの詳細が入ります。コースの詳細が入ります。
                        コースの詳細が入ります。コースの詳細が入ります。コースの詳細が入ります。
                    </p>
                </div>
                <div>
                    <button class="btn filled">もっと詳しく</button>
                </div>
                <div class="course__category">
                    <span>カテゴリー</span>
                    <span>筋肉</span>
                    <span>筋肉</span>
                    <span>筋肉</span>
                    <span>筋肉</span>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/image-1.jpg') }}" alt="">
            </div>
        </div>

    </div>
</section>
@endsection