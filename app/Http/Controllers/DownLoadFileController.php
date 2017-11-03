<?php

namespace App\Http\Controllers;

use App\VideoDownloadList;
use App\MusicLibrary;
use App\People;
use App\VideoLearnSchedule;
use App\VideoLibrary;
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

        $people = People::where('phone', $phone)->first();
        if ($people == null) {
            return view('errors.nouser');
        }

        $data = VideoDownloadList::where('file_id', $id)->where('uid', $people->id)->first();
        if ($data == null) {
            return view('errors.download');
        }

        $videoInfo = VideoLibrary::find($id);
        $fileName = $videoInfo->unsigned_name;
        $filePath = $videoInfo->v_url;

        if(file_exists($filePath)) {
            /**
             * 部署学习信息
             */
            $videoLearn = VideoLearnSchedule::where('open_id', $people->open_id)->where('series_id', $videoInfo->series_id)->first();
            if($videoLearn != null && $videoLearn != ''){
                $videoLearn->num = $videoInfo->num;
                $videoLearn->status = '已下载'; // 两种状态：已完成、已下载
                $videoLearn->save();
            } else {
                VideoLearnSchedule::insert(array(
                    'open_id' => $people->open_id,
                    'series_id' => $videoInfo->series_id,
                    'num' => $videoInfo->num,
                    'status' => '已下载' // 两种状态：已完成、已下载
                ));
            }

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
        $buyList = VideoDownloadList::where('uid', $people->id)->get();

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
