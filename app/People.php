<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "peoples";

    protected $fillable = [
        'id',
        'name',
        'open_id',
        'nickname',
        'head_img_url',
        'profession',
        'total_score',
        'status'
    ];
}
