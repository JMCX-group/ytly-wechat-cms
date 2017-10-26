<?php

namespace App\Http\Controllers\Business;

use App\VideoLibrary;
use App\VideoSeries;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoCourseController extends Controller
{
    public $page_level = "视频课程";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = VideoLibrary::paginate(50);
        $page_title = "视频列表";
        $page_level = $this->page_level;

        return view('video-course.index', compact('videos', 'page_title', 'page_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "上传视频";
        $page_level = $this->page_level;

        $series = VideoSeries::all();

        return view('video-course.create', compact('page_title', 'page_level', 'series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 判断文件名是否已经存在
        $unsignedName = $request['unsigned_name'];
        if ($unsignedName != '') {
            $ret = VideoLibrary::where('unsigned_name', $unsignedName)->get()->first();
            if ($ret != null) {
                return redirect()->back()->withErrors(array('error' => '自定义文件名已存在'))->withInput();
            }
        } else {
            $unsignedName = date('YmdHis');
        }

        // 保存视频文件
        $videoFileUrl = '';
        if ($request->hasFile('upload_video')) {
            $videoFile = $request->file('upload_video');
            $suffix = $videoFile->getClientOriginalExtension();

            if ($videoFile->isValid()) { //判断文件是否上传成功
                $destinationPath = \Config::get('constants.VIDEO_PATH');
                $filename = $unsignedName . '.' . $suffix;

                try {
                    $videoFile->move($destinationPath, $filename);
                } catch (\Exception $e) {
                    Log::info('upload-video', ['context' => $e->getMessage()]);
                }

                $videoFileUrl = '/' . $destinationPath . $filename;
            }
        }

        // 生成课时序号
        $lastNum = VideoLibrary::where('series_id', $request['series_id'])->orderBy('num', 'desc')->first();
        if ($lastNum == null) {
            $lastNum = 0;
        }

        /**
         * 生成数据
         */
        $data = [
            'unsigned_name' => $unsignedName,
            'num' => ($lastNum['num'] + 1),
            'series_id' => $request['series_id'],
            'desc' => $request['desc'],
            'v_url' => $videoFileUrl
        ];

        try {
            VideoLibrary::create($data);

            return redirect()->route('video-course.index')->withSuccess('上传视频成功');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
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
        $series = VideoSeries::all();
        $video = VideoLibrary::find($id);
        $page_title = "编辑视频信息";
        $page_level = $this->page_level;

        return view('video-course.edit', compact('series', 'video', 'page_title', 'page_level'));
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
        $video = VideoLibrary::find($id);

        // 保存视频文件
        $videoFileUrl = '';
        if ($request->hasFile('upload_video')) {
            $videoFile = $request->file('upload_video');
            $suffix = $videoFile->getClientOriginalExtension();

            if ($videoFile->isValid()) { //判断文件是否上传成功
                $destinationPath = \Config::get('constants.VIDEO_PATH');
                $filename = $video->unsigned_name . '.' . $suffix;

                try {
                    $videoFile->move($destinationPath, $filename);
                } catch (\Exception $e) {
                    Log::info('upload-video', ['context' => $e->getMessage()]);
                }

                $videoFileUrl = '/' . $destinationPath . $filename;
            }
        }

        /**
         * 更新数据
         */
        $video->series_id = $request['series_id'];
        $video->num = $request['num'];
        $video->desc = $request['desc'];
        $video->v_url = ($videoFileUrl == '') ? $video->v_url : $videoFileUrl;


        try {
            $video->save();

            return redirect()->route('video-course.index')->withSuccess('更新视频信息成功');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(array('error' => $e->getMessage()))->withInput();
        }
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
