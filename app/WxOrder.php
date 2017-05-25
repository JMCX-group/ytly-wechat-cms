<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WxOrder extends Model
{
    protected $table = "wx_orders";

    protected $fillable = [
        'open_id',
        'out_trade_no',
        'total_fee',
        'body',
        'detail',
        'type',
        'time_start',
        'time_expire',
        'ret_data',
        'status'
    ];
}
