<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoSeries extends Model
{
    protected $table = "video_series";

    protected $fillable = [
        'name',
        'class_count',
        'status'
    ];
}
