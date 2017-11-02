<?php

namespace App\Http\Controllers\Business;

use App\People;
use App\VideoDownloadList;
use App\VideoLearnSchedule;
use App\VideoLibrary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoDownloadListController extends Controller
{
    public $page_level = "学习进度";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = VideoLearnSchedule::getList();
        $page_title = "学员列表";
        $page_level = $this->page_level;

        return view('video-download-list.index', compact('lists', 'page_title', 'page_level'));
    }

    /**
     * 完成课程，开放新的下载权限
     *
     * @param $id
     */
    public function completed($id)
    {
        /**
         * 改变状态
         */
        $info = VideoLearnSchedule::find($id);
        $info->status = "已完成"; // 两种状态：已完成、已下载
        $info->save();

        /**
         * 部署可下载信息
         */
        $people = People::where('open_id', $info->open_id)->first();
        $videos = VideoLibrary::where('series_id', $info->series_id)->where('num', (($info->num) + 1))->first();
        if ($videos != null && $videos != '') {
            VideoDownloadList::insert(array('uid' => $people->id, 'file_id' => $videos->id, 'status' => 1));
        }

        $this->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
