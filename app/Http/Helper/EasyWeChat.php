<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/7/18
 * Time: 下午5:45
 */

namespace App\Http\Helper;

use EasyWeChat\Foundation\Application;
use Illuminate\Support\Facades\Log;

/**
 * API文档：https://easywechat.org/zh-cn/docs/
 *
 * Class EasyWeChat
 * @package App\Http\Helper
 */
class EasyWeChat
{
    public static function getOptions()
    {
        return [
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
    }

    /**
     * 回应微信服务器，给予响应
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function getResponse()
    {
        $options = self::getOptions();
        $app = new Application($options);

        return $app->server->serve();
    }

    /**
     * 设置自定义菜单
     *
     * @param $buttons
     */
    public static function setMenus($buttons)
    {
        $options = self::getOptions();
        $app = new Application($options);
        $menu = $app->menu;
        $menu->add($buttons);
    }

    /**
     * 获取所有关注用户
     *
     * @return \EasyWeChat\Support\Collection
     */
    public static function getAllFans()
    {
        $options = self::getOptions();
        $app = new Application($options);
        $userService = $app->user;
        $userInfo = $userService->lists();

        return $userInfo->data['openid'];

        return $userService->batchGet($userInfo->data->openid);
    }
}
