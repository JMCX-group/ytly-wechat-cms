<?php

namespace App\Http\Controllers\Business;

use App\People;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    public $page_level = "人员管理";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::paginate(50);
        $page_title = "人员列表";
        $page_level = $this->page_level;


        $options = [
            'debug' => true,

            'app_id' => env('WECHAT_APPID', 'wxaf50aa2e244ab2ce'), // AppID
            'secret' => env('WECHAT_SECRET', '727c022c2c440f228362e8d52c157b3d'), // AppSecret
            'token' => env('WECHAT_TOKEN', 'jianji2016'),  // Token
        ];
        $app = new Application($options);
        $userService = $app->user;
        $users = $userService->lists();

        echo $users;

        return view('peoples.index', compact('peoples', 'page_title', 'page_level'));
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
