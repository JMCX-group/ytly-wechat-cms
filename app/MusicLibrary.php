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
        'p_title',
        'p_author',
        'p_url',
        'p_pic'
    ];
}
