<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyList extends Model
{
    protected $table = "buy_list";

    protected $fillable = [
        'uid',
        'file_id',
        'status'
    ];
}
