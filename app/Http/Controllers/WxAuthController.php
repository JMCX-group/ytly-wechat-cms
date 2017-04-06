<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;

class WxAuthController extends Controller
{
    public function index()
    {
        $options = [
            'debug' => true,
            'app_id' => env('WECHAT_APPID'), // AppID
            'secret' => env('WECHAT_SECRET'), // AppSecret
            'token' => env('WECHAT_TOKEN') // Token
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
