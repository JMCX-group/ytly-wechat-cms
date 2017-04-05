<?php

namespace App\Http\Controllers\Business;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public $page_level = "系统管理";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $configs = Config::find(1);
//        $data = json_decode($configs->json, true);
//        if ($data == null) {
//            /**
//             * 没有就初始化参数：
//             */
//            $data = [
//                'top_director' => '1500',
//            ];
//            $configs->json = json_encode($data);
//            $configs->save();
//        }
//
        $config = [
//            'id' => $configs->id,
        ];
        $config = (object)$config;
        $page_title = "菜单管理";
        $page_level = $this->page_level;

        return view('wechat.edit', compact('config', 'page_title', 'page_level'));
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
        $name = $request['name'];
        $url = $request['url'];

        $options = [
            'debug' => true,

            'app_id' => env('WECHAT_APPID', 'wxaf50aa2e244ab2ce'), // AppID
            'secret' => env('WECHAT_SECRET', '727c022c2c440f228362e8d52c157b3d'), // AppSecret
            'token' => env('WECHAT_TOKEN', 'jianji2016'),  // Token
        ];
        $app = new Application($options);
        $menu = $app->menu;

        $buttons = [
            [
                "type" => "click",
                "name" => "今日歌曲",
                "key"  => "V1001_TODAY_MUSIC"
            ],
            [
                "name"       => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url"  => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],
                ],
            ],
        ];

        try {
            $menu->add($buttons);

            return redirect()->route('menu.index')->withSuccess('更新成功');
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
