<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoBuyList extends Model
{
    protected $table = "video_buy_list";

    protected $fillable = [
        'open_id',
        'series_id',
        'type',
        'start_time',
        'end_time'
    ];

    /**
     * 获取购买者和相关个人信息
     *
     * @return mixed
     */
    public static function getList()
    {
        return VideoBuyList::select(
            'video_buy_list.id', 'video_buy_list.open_id', 'video_buy_list.series_id', 'video_buy_list.type',
            'video_buy_list.start_time', 'video_buy_list.end_time',
            'peoples.name', 'peoples.nickname', 'peoples.head_img_url',
            'video_series.name AS series_name')
            ->leftJoin('peoples', 'peoples.open_id', '=', 'video_buy_list.open_id')
            ->leftJoin('video_series', 'video_series.id', '=', 'video_buy_list.series_id')
            ->orderBy('video_buy_list.id')
            ->paginate(50);
    }
}
