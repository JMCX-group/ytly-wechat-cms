<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = "timetables";

    protected $fillable = [
        'name',
        'course_list',
        'class_count',
        'status'
    ];
}
