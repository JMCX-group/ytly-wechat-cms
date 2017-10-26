<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoLibrary extends Model
{
    protected $table = "videos";

    protected $fillable = [
        'unsigned_name',
        'num',
        'series_id',
        'v_url',
        'desc'
    ];
}
