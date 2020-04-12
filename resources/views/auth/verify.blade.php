@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">本登録</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            新しい本登録メッセージが送信されました。
                        </div>
                    @endif
                    メールアドレスの認証をお願いします。
                    もしメールを受け取ってないなら、
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">ここをクリックしてください</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
