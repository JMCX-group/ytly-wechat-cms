<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoLearnSchedule extends Model
{
    protected $table = "video_learn_schedule";

    protected $fillable = [
        'open_id',
        'series_id',
        'num',
        'status'
    ];

    /**
     * 获取购买者和相关个人信息
     *
     * @return mixed
     */
    public static function getList()
    {
        return VideoLearnSchedule::select(
            'video_learn_schedule.id', 'video_learn_schedule.open_id', 'video_learn_schedule.series_id',
            'video_learn_schedule.num', 'video_learn_schedule.status',
            'peoples.name', 'peoples.nickname', 'peoples.head_img_url',
            'video_series.name AS series_name')
            ->leftJoin('peoples', 'peoples.open_id', '=', 'video_learn_schedule.open_id')
            ->leftJoin('video_series', 'video_series.id', '=', 'video_learn_schedule.series_id')
            ->orderBy('video_learn_schedule.id')
            ->paginate(50);
    }
}
