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
    <div class="div-centered">
        <button class='btn-success' onclick="callPay()" style="width:210px; height:50px;font-size:16px;" type="button">立即支付</button>
    </div>
@stop


@section('script')
    <script type="text/javascript">
        //调用微信JS api 支付
        function jsApiCall() {
            WeixinJSBridge.invoke('getBrandWCPayRequest',<?php echo $config; ?>, function (res) {
                    WeixinJSBridge.log(res.err_msg);
                    alert(res.err_code + res.err_desc + res.err_msg);
                }
            );
        }

        function callPay() {
            alert(JSON.stringify(<?php echo $config; ?>));
            if (typeof WeixinJSBridge == "undefined") {
                if (document.addEventListener) {
                    document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                } else if (document.attachEvent) {
                    document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                    document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                }
            } else {
                jsApiCall();
            }
        }
    </script>
@stop

@section('style')
    <style>
        /* DIV居中 */
        .div-centered {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -100px 0 0 -150px;
            font-size: 30px;
        }
    </style>
@stop