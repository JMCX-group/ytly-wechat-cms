<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoDownloadList extends Model
{
    protected $table = "video_download_list";

    protected $fillable = [
        'uid',
        'file_id',
        'status'
    ];
}
