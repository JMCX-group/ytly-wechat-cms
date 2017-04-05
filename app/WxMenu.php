<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WxMenu extends Model
{
    protected $table = "wx_menus";

    protected $fillable = [
        'name',
        'json'
    ];
}
