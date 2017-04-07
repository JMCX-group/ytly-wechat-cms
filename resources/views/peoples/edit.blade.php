<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/3/30
 * Time: 下午3:32
 */
?>

@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <form class="form-horizontal" action="{{URL::to('people/'.$people->id)}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put">
                    </div>
                    <div class="box-body">

                        <ul class="breadcrumb">
                            <li><a href="#">微信信息</a> <span class="divider"></span></li>
                        </ul>
                        <div class="form-group">
                            <label for="avatar" class="col-sm-3 control-label">头像</label>
                            <div class="col-sm-9">
                                <img src="{{$people->head_img_url}}" width="200px" style="margin-bottom:10px;" alt="image without thumbnail corners">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nickname" class="col-sm-3 control-label">昵称</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nickname" name="nickname" disabled='disabled' placeholder="微信昵称（特殊符号无法显示）" value="{{$people->nickname}}">
                                @include('layouts.message.tips',['field'=>'nickname'])
                            </div>
                        </div>

                        <ul class="breadcrumb">
                            <li><a href="#">自定义信息</a> <span class="divider"></span></li>
                        </ul>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">姓名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="真实姓名（人员手工备注）" value="{{$people->name}}">
                                @include('layouts.message.tips',['field'=>'name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">身份</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="status" title="身份">
                                    <option value="学生" @if($people->status=="学生") selected @endif>学生</option>
                                    <option value="老师" @if($people->status=="老师") selected @endif>老师</option>
                                    <option value="工作人员" @if($people->status=="工作人员") selected @endif>工作人员</option>
                                    <option value="其他" @if($people->status=="其他") selected @endif>其他</option>
                                </select>
                                @include('layouts.message.tips',['field'=>'status'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">专业</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="profession">
                                    <option value="无" @if($people->profession=="无") selected @endif>无</option>
                                    <option value="声乐-古典" @if($people->profession=="声乐-古典") selected @endif>声乐-古典</option>
                                    <option value="声乐-流行" @if($people->profession=="声乐-流行") selected @endif>声乐-流行</option>

                                    <option value="弦乐-小提琴" @if($people->profession=="弦乐-小提琴") selected @endif>弦乐-小提琴</option>
                                    <option value="弦乐-大提琴" @if($people->profession=="弦乐-大提琴") selected @endif>弦乐-大提琴</option>
                                    <option value="弦乐-吉他" @if($people->profession=="弦乐-吉他") selected @endif>弦乐-吉他</option>

                                    <option value="管乐-单簧管" @if($people->profession=="管乐-单簧管") selected @endif>管乐-单簧管</option>
                                    <option value="管乐-长笛" @if($people->profession=="管乐-长笛") selected @endif>管乐-长笛</option>
                                    <option value="管乐-萨克斯" @if($people->profession=="管乐-萨克斯") selected @endif>管乐-萨克斯</option>
                                    <option value="管乐-小号" @if($people->profession=="管乐-小号") selected @endif>管乐-小号</option>
                                </select>
                                @include('layouts.message.tips',['field'=>'profession'])
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{route('people.index')}}">返回</a>
                        <button type="submit" class="btn btn-danger pull-right">确 定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
