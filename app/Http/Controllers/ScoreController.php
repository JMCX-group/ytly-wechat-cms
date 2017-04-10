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

        /**
         * 获取所有分数信息：
         */
        $score = array();
        foreach ($timeTables as $timeTable) {
            $scores = Credit::where('people_id', $people->id)->where('timetable_id', $timeTable->id)->orderBy('num', 'DESC')->get();

            /**
             * 对专业各科分类排序：
             */
            $total = 0;
            $finalExam = 0;
            $detail = array();
            foreach ($scores as $scoreItem) {
                $total += $scoreItem->fraction;

                /**
                 * 判断是否有期末考试分
                 */
                if ($scoreItem->num == 0) {
                    $finalExam = $scoreItem->fraction;
                } else {
                    array_push($detail, $scoreItem->fraction);
                }
            }
            $tmpData = array(
                'course_name' => $timeTable->course,
                'total_score' => $total,
                'final_exam' => $finalExam,
                'detail_score' => $detail
            );

            array_push($score, $tmpData);
        }

        return view('score.index', compact('user_info', 'score'));
    }
}
