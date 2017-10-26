<?php

namespace App\Http\Controllers;

use App\BuyList;
use App\MusicLibrary;
use App\People;
use Illuminate\Http\Request;

class DownLoadFileController extends Controller
{
    public function index()
    {
        return view('download.index');
    }

    /**
     * 获取下载文件
     *
     * @param $str
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function downloadFile($str)
    {
        $id = substr($str, 0, strlen($str) - 11);
        $phone = substr($str, strlen($id));

        $uid = People::where('phone', $phone)->first();
        if ($uid == null) {
            return view('errors.nouser');
        }

        $data = BuyList::where('file_id', $id)->where('uid', $uid->id)->first();
        if ($data == null) {
            return view('errors.download');
        }

        $fileName = MusicLibrary::find($id);
        $fileName = $fileName->unsigned_name.'.mp3';
        $filePath = 'audios/musics/' . $fileName;

        if(file_exists($filePath)) {
            $this->download_send_headers($fileName);
            readfile($filePath);

            $data->status = 0;
            $data->save();

            return view('download.index');
        } else {
            return view('errors.no-file');
        }
    }

    /**
     * 隐藏真实下载地址
     *
     * @param $filename
     */
    public function download_send_headers($filename)
    {
        // disable caching
        $now = gmdate("D, d M Y H:i:s");
        header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
        header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
        header("Last-Modified: {$now} GMT");

        // force download
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");

        // disposition / encoding on response body
        header("Content-Disposition: attachment;filename={$filename}");
        header("Content-Transfer-Encoding: binary");
    }

    /**
     * 根据手机号获取下载列表
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDownList(Request $request)
    {
        $people = People::where('phone', $request['phone'])->first();
        if($people == null){
            return view('errors.nouser');
        }

        $user_info = [
            'phone' => $request['phone'],
            'user_name' => $people->nickname
        ];
        $buyList = BuyList::where('uid', $people->id)->get();

        $list = array();
        foreach ($buyList as $item) {
            $file = MusicLibrary::find($item->file_id);

            $tmp = [
                'id' => $item->file_id,
                'name' => $file->m_title,
                'status' => $item->status
            ];

            array_push($list, $tmp);
        }

        return view('download.list', compact('user_info', 'list'));
    }
}
