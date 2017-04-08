<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $table = "credits";

    protected $fillable = [
        'people_id',
        'timetable_id',
        'num',
        'fraction'
    ];

    /**
     * 获取分数
     *
     * @return mixed
     */
    public static function getCredit()
    {
        return Credit::select('credits.*', 'peoples.name', 'peoples.nickname', 'timetables.profession', 'timetables.course')
            ->leftJoin('peoples', 'peoples.id', '=', 'credits.people_id')
            ->leftJoin('timetables', 'timetables.id', '=', 'credits.timetable_id')
            ->orderBy('id')
            ->paginate(50);
    }
}
