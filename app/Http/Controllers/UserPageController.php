<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    //ユーザーページのコントローラー
    public function index()
    {
        return view('userpages/index');
    }

}
