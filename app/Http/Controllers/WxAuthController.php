<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;

class WxAuthController extends Controller
{
    public function index()
    {
        $options = [
            'debug' => true,

            'app_id' => env('WECHAT_APPID', 'wxaf50aa2e244ab2ce'), // AppID
            'secret' => env('WECHAT_SECRET', '727c022c2c440f228362e8d52c157b3d'), // AppSecret
            'token' => env('WECHAT_TOKEN', 'jianji2016'),  // Token

            // 'aes_key' => null, // 可选

//    'log' => [
//        'level' => 'debug',
//        'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
//    ],
            //...
        ];

        $app = new Application($options);
        $response = $app->server->serve();

        // 将响应输出
        return $response;
    }
}
