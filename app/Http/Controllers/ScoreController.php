<?php

namespace App\Http\Controllers;

use App\People;

class ScoreController extends Controller
{
    public function index()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        $openId = $user->id;
        $people = People::find($openId);

        $user_info = [
            'user_name' => $user->nickname,
            'course_name' => $people->peofession,
            'user_headimg' => $user->avatar
        ];

        dd($user_info);

        return view('article.index', compact('user_info'));
    }
}
