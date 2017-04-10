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


$course_name_key = "course_name";
$total_score_key = "total_score";
$detail_scores_key = "detail_score";
        $score = array(
    array(
        $course_name_key=>"钢琴",
        $total_score_key=>150,
        $detail_scores_key=>array(
            10,20,30,40,50
        )
    ),
    array(
        $course_name_key=>"小提琴",
        $total_score_key=>150,
        $detail_scores_key=>array(
            10,20,30,40,50
        )
    ),
    array(
        $course_name_key=>"手风琴",
        $total_score_key=>150,
        $detail_scores_key=>array(
            10,20,30,40,50
        )
    ),
    array(
        $course_name_key=>"竖琴",
        $total_score_key=>150,
        $detail_scores_key=>array(
            10,20,30,40,50
        )
    )
);

        return view('score.index', compact('user_info', 'score'));
    }
}
