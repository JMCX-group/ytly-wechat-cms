<?php

namespace App\Http\Controllers;

use App\People;

class ScoreController extends Controller
{
    public function index()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        $openId = $user->id;
        $people = People::where('open_id', $openId)->first();

        $user_info = [
            'user_name' => $user->nickname,
            'course_name' => $people->profession,
            'user_headimg' => $user->avatar
        ];

        $score = null;

        return view('score.index', compact('user_info', 'score'));
    }
}
