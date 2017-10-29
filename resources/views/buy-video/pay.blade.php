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

            <div class="box-body" style="margin-top: 15px;">
                @if(isset($user_info))
                    <div class="form-group">
                        <div class="col-xs-1 column"></div>
                        <div class="col-xs-3 column" style="text-align: right;">
                            <img src="{{$user_info['user_avatar']}}" class="img-avatar img-rounded" style="margin-right: 15px;"/>
                        </div>
                        <div class="col-xs-7 column" style="margin-left: -15px; top:11px;">
                            <label for="nickname" class="control-label">{{$user_info['user_name']}}</label>
                        </div>
                        <div class="col-xs-1 column"></div>
                    </div>
                @endif
                <div class="form-group">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-3 column" style="text-align: right; top: 8px;">
                        <label for="phone" class="control-label">联系方式：</label>
                    </div>
                    <div class="col-xs-7 column" style="margin-left: -15px;">
                        <input type="text" class="form-control" id="phone" name="phone" disabled value="{{$user_info['phone']}}">
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-3 column" style="text-align: right; top: 8px;">
                        <label for="series" class="control-label">课程系列：</label>
                    </div>
                    <div class="col-xs-7 column" style="margin-left: -15px;">
                        @foreach($series as $item)
                            @if($item['id'] == $data['series_id'])
                                <input type="text" class="form-control" id="series" name="series" disabled value="{{$item['name']}}">
                            @else
                                <input type="text" class="form-control" id="series" name="series" disabled value="{{$item['name']}}">
                            @endif
                        @endforeach
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-3 column" style="text-align: right; top: 8px;">
                        <label for="price" class="control-label">课程费用：</label>
                    </div>
                    <div class="col-xs-7 column" style="margin-left: -15px;">
                        @if($data['type'] == 'half')
                            <input type="text" class="form-control" id="price" name="price" disabled value="129元">
                        @else
                            <input type="text" class="form-control" id="price" name="price" disabled value="199元">
                        @endif
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>
            </div>

            <div class="box-footer" style="margin-top: 45px;">
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