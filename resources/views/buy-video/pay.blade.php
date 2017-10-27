<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 2017/10/27
 * Time: 16:11
 */

?>

@extends('layouts.main-info')

@section('content')
    <div>
        {{$ret}}
    </div>
    <button  class="btn-wechat-pay" style="width:210px; height:50px;font-size:16px;" type="button">立即支付</button>
@stop


@section('script')
    {{--<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript" charset="utf-8"></script>--}}
    {{--<script type="text/javascript" charset="utf-8">--}}
        {{--wx.config({{ $ret['js']->config(array('chooseWXPay')) }});--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--$(function(){--}}

            {{--$(".btn-wechat-pay").click(function(){--}}
                {{--wx.chooseWXPay({--}}
                    {{--timestamp: "{{$ret['config']['timestamp']}}", // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符--}}
                    {{--nonceStr: '{{$ret['config']['nonceStr']}}', // 支付签名随机串，不长于 32 位--}}
                    {{--package: '{{$ret['config']['package']}}', // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）--}}
                    {{--signType: '{{$ret['config']['signType']}}', // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'--}}
                    {{--paySign: '{{$ret['config']['paySign']}}', // 支付签名--}}
                    {{--success: function (res) {--}}
                        {{--// 支付成功后的回调函数--}}
                        {{--if(res.err_msg == "get_brand_wcpay_request：ok" ) {--}}
                            {{--alert('支付成功。');--}}
                        {{--}else{--}}
                            {{--alert("支付失败，请返回重试。");--}}
                        {{--}--}}
                    {{--},--}}
                    {{--fail: function (res) {--}}
                        {{--alert("支付失败，请返回重试。");--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@stop