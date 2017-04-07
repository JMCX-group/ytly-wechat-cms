<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = "timetables";

    protected $fillable = [
        'profession',
        'course',
        'class_count',
        'status'
    ];
}
