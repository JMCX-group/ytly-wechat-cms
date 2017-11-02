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
            <form class="form-horizontal" action="{{URL::to('info/buy-video')}}" method="post" enctype="multipart/form-data">
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
                            @if(isset($user_info['phone']) && $user_info['phone'] != '' && $user_info['phone'] != null)
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$user_info['phone']}}">
                            @else
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="请务必填写您的手机号码" value="">
                            @endif
                            @include('layouts.message.tips',['field'=>'phone'])
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
                                <div class="radio">
                                    <label>
                                        @if(isset($buyInfo['series_id']) && $buyInfo['series_id'] === $item['id'])
                                            <input type="radio" name="series" style="margin-bottom: 15px;" checked value="{{$item['id']}}">{{$item['name']}}
                                        @else
                                            <input type="radio" name="series" style="margin-bottom: 15px;" value="{{$item['id']}}">{{$item['name']}}
                                        @endif
                                    </label>
                                </div>
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
                            <div class="radio">
                                <label>
                                    @if(isset($buyInfo['type']) && $buyInfo['type'] === 'half')
                                        <input type="radio" name="price" style="margin-bottom: 15px;" checked value="half">半年费用：129元
                                    @else
                                        <input type="radio" name="price" style="margin-bottom: 15px;" value="half">半年费用：129元
                                    @endif
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    @if(isset($buyInfo['type']) && $buyInfo['type'] === 'all')
                                        <input type="radio" name="price" style="margin-bottom: 15px;" checked value="all">全年费用：199元
                                    @else
                                        <input type="radio" name="price" style="margin-bottom: 15px;" value="all">全年费用：199元
                                    @endif
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1 column"></div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column"><hr></div>
                    <div class="col-xs-1 column"></div>
                </div>

                <div class="box-footer" style="margin-top: 45px;">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column">
                        @if(isset($buyInfo['status']) &&  $buyInfo['status']=== 'no_pay')
                            <button type="submit" class="btn btn-block btn-info">支付费用</button>
                        @elseif(isset($buyInfo['status']) &&  $buyInfo['status']=== 'paid')
                            有效期：{{$buyInfo['start_time']}} - {{$bufInfo['end_time']}}
                        @else
                            <button type="submit" class="btn btn-block btn-info">提交信息</button>
                        @endif
                    </div>
                    <div class="col-xs-1 column"></div>
                </div>

            </form>
        </div>
    </div>
@stop
