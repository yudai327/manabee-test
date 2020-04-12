<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Push;
use App\User;
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class PushMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // ログイン済みのときの処理
        if (Auth::check()) {
            // ステータス０で全体にお知らせ＆運営から個人にお知らせするときの処理
            $user_id = Auth::id();
            $pushes = Push::select('comment')->orwhere('user_id', $user_id)
                ->orWhere([
                ['status', 0],
                ['user_id', null]
                ])->get();
            View::share(['pushes' => $pushes]);

        } else {
            // ログインしていないときの処理
            $user_push = null;
            View::share(['pushes' => $user_push]);
        }
        //全てのViewに、pushesという名前の配列を渡す.

        return $next($request);
    }
}
