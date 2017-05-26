<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WxSignUp extends Model
{
    protected $table = "wx_sign_up";

    protected $fillable = [
        'open_id',
        'name',
        'phone',
        'age',
        'class_time',
        'status'
    ];
}
