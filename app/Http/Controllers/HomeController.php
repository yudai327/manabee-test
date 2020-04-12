<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = Auth::user();
        return view('home.index', ['auth' => $auth]);
    }
    public function useredit($page)
    {
        $auth = Auth::user();
        return view('home.edit', ['auth' => $auth, 'page' => $page]);
    }


    public function update(Request $request, $id)
    {
        // 選択ページ情報取得
        $page = $request->page;
        // 選択ページでバリデーションを選ぶ
        if ($page == 'name') {
            $rule = User::$editNameRules;
        } elseif ($page == 'nickname') {
            $rule = User::$editNicknameRules;
        } elseif ($page == 'email') {
            $rule = User::$editEmailRules;
        } elseif ($page == 'password') {
            $rule = User::$editPasswordRules;
        }
        // バリデーションチェック
        $this->validate($request, $rule);
        // 対象レコード取得
        $auth = User::find($id);
        // リクエストデータ受取
        $form = $request->all();
        // フォームトークン削除
        unset($form['_token']);
        // ページ情報削除
        unset($form['page']);
        // パスワードハッシュ化
        if (isset($form['password'])) {
            $form['password'] = Hash::make($form['password']);
        }
        $passcheck = Hash::check($form['old_password'], $auth->password);
        // レコードアップデート
        $auth->fill($form)->save();
        return redirect('/user');
    }

}
