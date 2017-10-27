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
    <div class="row">
        <div class="box box-info">
            <div class="row clearfix" style="text-align: center;">
                <div class="col-xs-12 column imgs-class">
                    <div style="text-align: center; font-size: 20px;">
                        <p style="color: #65696f">
                            <span>艺同六艺菁英教育</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix" style="text-align: center;">
                <div class="col-xs-12 column">
                    <div style="text-align: center; font-size: 24px;">
                        <p style="color: #453e4d">
                            <span>视频教学课程</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column"><hr></div>
                <div class="col-xs-1 column"></div>
            </div>

            <div class="box-body" style="margin-top: 45px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column">
                    <button class='btn btn-block btn-success' onclick="callPay()"  type="button">立即支付</button>
                </div>
                <div class="col-xs-1 column"></div>
            </div>
        </div>
    </div>
@stop


@section('script')
    <script type="javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript">
        //调用微信JS api 支付
        function jsApiCall() {
            WeixinJSBridge.invoke('getBrandWCPayRequest',<?php echo $config; ?>, function (res) {
                    WeixinJSBridge.log(res.err_msg);
                    // alert(res.err_code + res.err_desc + res.err_msg);
                }
            );
        }

        function callPay() {
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