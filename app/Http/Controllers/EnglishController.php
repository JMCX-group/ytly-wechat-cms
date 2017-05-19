<?php

namespace App\Http\Controllers;

class EnglishController extends Controller
{
    /**
     * 获取用户信息
     *
     * @return array
     */
    public function getUserInfo()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料

        if (isset($user)) {
            /**
             * 获取用户信息：
             */
            $user_info = [
                'user_name' => $user->nickname,
                'user_avatar' => $user->avatar
            ];
        } else {
            $user_info = null;
        }

        return $user_info;
    }

    /**
     * 第一次demo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function art()
    {
        $user_info = $this->getUserInfo();

        return view('english.art', compact('user_info'));
    }
}
