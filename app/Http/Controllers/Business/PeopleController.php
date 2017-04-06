<?php

namespace App\Http\Controllers\Business;

use App\Http\Helper\EasyWeChat;
use App\People;
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
        /**
         * 同步微信服务器端的数据：
         */
        $this->syncUsers();

        $peoples = People::paginate(50);
        $page_title = "人员列表";
        $page_level = $this->page_level;

        return view('peoples.index', compact('peoples', 'page_title', 'page_level'));
    }

    public function syncUsers()
    {
        $users = EasyWeChat::getAllFans();
        $users = $users->user_info_list;
        $usersStr = json_encode($users);
        $usersArr = json_decode($usersStr, true);

        foreach ($usersArr as $user) {
            People::updateOrCreate(['open_id' => $user['openid']], ['nickname' => $user['nickname'], 'head_img_url' => $user['headimgurl']]);
        }

        echo json_encode($usersStr);
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
