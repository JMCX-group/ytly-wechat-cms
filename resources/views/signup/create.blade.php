<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/3/30
 * Time: 下午3:32
 */
?>

@extends('layouts.main-info')
@section('content')
    <div class="row">
        <div class="box box-info">
            <form class="form-horizontal" action="{{URL::to('info/sign-up')}}" method="post" enctype="multipart/form-data">
                <div class="box-header with-border">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>

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
                                <span>儿童创意手工书体验课程</span>
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
                            <label for="name" class="control-label">姓名：</label>
                        </div>
                        <div class="col-xs-7 column" style="margin-left: -15px;">
                            @if(isset($signUpInfo))
                                <input type="text" class="form-control" id="name" name="name" disabled="disabled" value="{{$signUpInfo['name']}}">
                            @else
                                <input type="text" class="form-control" id="name" name="name" placeholder="您的姓名" value="">
                                @include('layouts.message.tips',['field'=>'name'])
                            @endif
                        </div>
                        <div class="col-xs-1 column"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1 column"></div>
                        <div class="col-xs-3 column" style="text-align: right; top: 8px;">
                            <label for="phone" class="control-label">联系方式：</label>
                        </div>
                        <div class="col-xs-7 column" style="margin-left: -15px;">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="您的手机号码" value="">
                            @include('layouts.message.tips',['field'=>'phone'])
                        </div>
                        <div class="col-xs-1 column"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1 column"></div>
                        <div class="col-xs-3 column" style="text-align: right; top: 8px;">
                            <label for="age" class="control-label">孩子年龄：</label>
                        </div>
                        <div class="col-xs-7 column" style="margin-left: -15px;">
                            <input type="text" class="form-control" id="phone" name="age" placeholder="您孩子的年龄" value="">
                            @include('layouts.message.tips',['field'=>'age'])
                        </div>
                        <div class="col-xs-1 column"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-1 column"></div>
                        <div class="col-xs-3 column" style="text-align: right; top: 8px;">
                            <label for="class-time" class="control-label">上课时间：</label>
                        </div>
                        <div class="col-xs-7 column" style="margin-left: -15px;">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="class-time" id="class-time1" value="am" checked>09:30 - 12:00
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="class-time" id="class-time2" value="pm">14:00 - 16:00
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1 column"></div>
                    </div>
                </div>

                @if(!isset($signUpInfo))
                <div class="box-footer">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column">
                        <button type="submit" class="btn btn-block btn-info">提 交 信 息</button>
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>
                @endif

            </form>
        </div>
    </div>


    <div class="container" style="margin: 30px 0;">
        <div>
            <div class="row clearfix">
                <div class="row clearfix">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column"><hr></div>
                    <div class="col-xs-1 column"></div>
                </div>
                @if(!isset($signUpInfo))
                <div class="row clearfix">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column" style="text-align: center;">
                        <p class="text-danger"><strong>扫码支付课程费用:</strong></p>
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column imgs-class" >
                        <img src="/qrcode/20170525-328.png" class="img-rounded" width="188px;"/>
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>
                @endif
            </div>
        </div>
    </div>
@stop
