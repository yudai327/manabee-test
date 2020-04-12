<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('top/index', ['users' => $users]);
    }
}
