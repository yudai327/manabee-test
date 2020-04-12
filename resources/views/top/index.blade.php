@extends('layouts.layout')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('head_title', 'index')



@section('content')
<section id="content">
    <div>
        <p class="font-lg">いつでもどんなトピックでも学べる。専門家が教える何千ものコースをご用意。</p>
    </div>
</section>
<section>
    <div>
        @foreach($users as $user)
        <h1>{{ $user -> nickname }}</h1>
        @endforeach
        <h2>急上昇中の動画</h2>
        <p>お気に入りの動画を見つけましょう</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-3 item_box">
                <a class="a_link" href="{{ route('course') }}">
                    <div>
                        <img src="{{ asset('images/image-1.jpg') }}" alt="">
                    </div>
                    <div class="item_box__inner">
                        <p class="item_box__title clamp2">『新卒者必見』膝関節の解剖・運動学・生理学の基本を押さえた上で極める人のための基本となる１０個の考え方</p>
                        <p class="item_box__name"><span class="clamp1">整形外科で働く理学療法士のオカちゃん</span>再生回数〇〇回　〇週間前</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 item_box">
                <a class="a_link" href="{{ route('course') }}">
                    <div>
                        <img src="{{ asset('images/image-1.jpg') }}" alt="">
                    </div>
                    <div class="item_box__inner">
                        <p class="item_box__title clamp2">『新卒者必見』膝関節の解剖・運動学・生理学の基本を押さえた上で極める人のための基本となる１０個の考え方</p>
                        <p class="item_box__name"><span class="clamp1">整形外科で働く理学療法士のオカちゃん</span>再生回数〇〇回　〇週間前</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 item_box">
                <a class="a_link" href="{{ route('course') }}">
                    <div>
                        <img src="{{ asset('images/image-1.jpg') }}" alt="">
                    </div>
                    <div class="item_box__inner">
                        <p class="item_box__title clamp2">『新卒者必見』膝関節の解剖・運動学・生理学の基本を押さえた上で極める人のための基本となる１０個の考え方</p>
                        <p class="item_box__name"><span class="clamp1">整形外科で働く理学療法士のオカちゃん</span>再生回数〇〇回　〇週間前</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 item_box">
                <a class="a_link" href="{{ route('course') }}">
                    <div>
                        <img src="{{ asset('images/image-1.jpg') }}" alt="">
                    </div>
                    <div class="item_box__inner">
                        <p class="item_box__title clamp2">『新卒者必見』膝関節の解剖・運動学・生理学の基本を押さえた上で極める人のための基本となる１０個の考え方</p>
                        <p class="item_box__name"><span class="clamp1">整形外科で働く理学療法士のオカちゃん</span>再生回数〇〇回　〇週間前</p>
                    </div>
                </a>
            </div>

        </div>
        <div>
            <button type="button" class="btn btn-outline-info">もっと詳しく</button>
        </div>
    </div>
</section>
<section>
    <div>
        <h2>最近の動画</h2>
        <p>お気に入りの動画を見つけましょう</p>
    </div>
    <div>
        <div>
            <div>
                <img src="{{ asset('images/image-1.jpg') }}" alt="">
            </div>
            <p>House 1</p>
        </div>
    </div>

</section>
@endsection