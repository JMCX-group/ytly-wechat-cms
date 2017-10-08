<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicLibrary extends Model
{
    protected $table = "music_library";

    protected $fillable = [
        'unsigned_name',
        'm_title',
        'm_content',
        'm_pic',
        'p_title',
        'p_author',
        'p_url',
        'p_pic',
        'qr_code_pic'
    ];
}
