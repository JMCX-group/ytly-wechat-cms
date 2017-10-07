<?php

namespace App\Http\Controllers\Business;

use App\Http\Helper\SaveImage;
use App\MusicLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    public $page_level = "音乐管理";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = MusicLibrary::paginate(20);
//        dd($credits);
        $page_title = "音乐列表";
        $page_level = $this->page_level;

        return view('librarys.index', compact('library', 'page_title', 'page_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "上传音乐";
        $page_level = $this->page_level;

        return view('librarys.create', compact('page_title', 'page_level'));
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
            $ret = MusicLibrary::where('unsigned_name', $unsignedName)->get()->first();
            if ($ret != null) {
                return redirect()->back()->withErrors(array('error' => '自定义文件名已存在'))->withInput();
            }
        } else {
            $unsignedName = date('YmdHis');
        }

        // 保存各种背景图
        $musicBgFile = $request->file('upload_music_b_img');
        if ($musicBgFile == null) {
            $musicBgImgUrl = '';
        } else {
            $musicBgImgUrl = SaveImage::musicBg($musicBgFile, $unsignedName);
        }
        $playerBgFile = $request->file('upload_player_b_img');
        if ($playerBgFile == null) {
            $playerBgImgUrl = $musicBgImgUrl;
        } else {
            $playerBgImgUrl = SaveImage::playerBg($playerBgFile, $unsignedName);
        }

        // 保存音乐文件
        $musicFile = $request->file('upload_music');
        if ($musicFile->isValid()) { //判断文件是否上传成功
            $destinationPath = \Config::get('constants.MUSIC_PATH');
            $filename = $unsignedName . '.mp3';

            try {
                $musicFile->move($destinationPath, $filename);
            } catch (\Exception $e) {
                Log::info('upload-music', ['context' => $e->getMessage()]);
            }

            $musicFileUrl = '/' . $destinationPath . $filename;
        } else {
            $musicFileUrl = '';
        }

        /**
         * 生成数据
         */
        $data = [
            'unsigned_name' => $unsignedName,
            'm_title' => $request['m_title'],
            'm_content' => $request['m_content'],
            'm_pic' => $musicBgImgUrl,
            'p_title' => $request['p_title'],
            'p_author' => $request['p_author'],
            'p_url' => $musicFileUrl,
            'p_pic' => $playerBgImgUrl
        ];

        try {
            MusicLibrary::create($data);

            return redirect()->route('library.index')->withSuccess('上传音乐成功');
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
