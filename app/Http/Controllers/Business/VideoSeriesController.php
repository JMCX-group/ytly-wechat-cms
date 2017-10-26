<?php

namespace App\Http\Controllers\Business;

use App\VideoSeries;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoSeriesController extends Controller
{
    public $page_level = "系列管理";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoSeries = VideoSeries::paginate(50);
        $page_title = "系列列表";
        $page_level = $this->page_level;

        return view('video-series.index', compact('videoSeries', 'page_title', 'page_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "新建课程";
        $page_level = $this->page_level;

        return view('video-series.create', compact('page_title', 'page_level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'class_count' => $request['count'],
            'status' => '启用'
        ];

        try {
            VideoSeries::create($data);

            return redirect()->route('video-series.index')->withSuccess('新增系列成功');
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
        $videoSeries = VideoSeries::find($id);
        $page_title = "编辑系列";
        $page_level = $this->page_level;

        return view('video-series.edit', compact('videoSeries', 'page_title', 'page_level'));
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
        $videoSeries = VideoSeries::find($id);
        $videoSeries->name = $request['name'];
        $videoSeries->class_count = $request['count'];
        $videoSeries->status = $request['status'];

        try {
            $videoSeries->save();

            return redirect()->route('video-series.index')->withSuccess('编辑系列成功');
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
