<?php

namespace App\Http\Controllers;

use App\Credit;
use App\People;
use App\Timetable;

class ScoreController extends Controller
{
    public function index()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        $openId = $user->id;
        $people = People::where('open_id', $openId)->first();

        /**
         * 获取用户信息：
         */
        $user_info = [
            'user_name' => $user->nickname,
            'course_name' => $people->profession,
            'user_headimg' => $user->avatar
        ];

        /**
         * 获取课程信息：
         */
        $timeTables = Timetable::where('profession', $people->profession)->where('status', '启用')->get();

        $score = array();
        foreach($timeTables as $timeTable) {
            $scores = Credit::where('people_id', $people->id)->where('timetable_id', $timeTable->id)->orderBy('num')->get();

            $total = 0;
            $detail = array();
            foreach ($scores as $score) {
                $total += $score;
                array_push($detail, $score);
            }
            $tmpData = array(
                'course_name' => $timeTable->course,
                'total_score' => $total,
                'detail_score' => $detail
            );

            array_push($score, $tmpData);
        }


//$course_name_key = "course_name";
//$total_score_key = "total_score";
//$detail_scores_key = "detail_score";
//        $score = array(
//    array(
//        $course_name_key=>"钢琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    ),
//    array(
//        $course_name_key=>"小提琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    ),
//    array(
//        $course_name_key=>"手风琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    ),
//    array(
//        $course_name_key=>"竖琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    )
//);

        return view('score.index', compact('user_info', 'score'));
    }
}
