<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 2017/10/27
 * Time: 16:11
 */

use EasyWeChat\Payment\Order;

$attributes = [
    'trade_type'       => 'JSAPI', // JSAPI，NATIVE，APP...
    'body'             => 'iPad mini 16G 白色',
    'detail'           => 'iPad mini 16G 白色',
    'out_trade_no'     => '1217752501201407033233368018',
    'total_fee'        => 5388, // 单位：分
    'notify_url'       => 'http://xxx.com/order-notify', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
    'openid'           => '当前用户的 openid', // trade_type=JSAPI，此参数必传，用户在商户appid下的唯一标识，
    // ...
];

$order = new Order($attributes);