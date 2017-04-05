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
        <div class="col-md-9">
            <div class="box box-info">
                <form class="form-horizontal" action="{{URL::to('menu/'.$wxMenu->id)}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put">
                    </div>
                    <div class="box-body">
                        <ul class="breadcrumb">
                            <li><a href="#">左侧一级菜单设置</a> <span class="divider"></span></li>
                        </ul>
                        <div class="form-group">
                            <label for="left-name" class="col-sm-4 control-label">菜单名称</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="left-name" name="left-name" placeholder="无" value="{{$wxMenu->left_name}}">
                                @include('layouts.message.tips',['field'=>'left-name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="left-url" class="col-sm-4 control-label">跳转网址</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="left-url" name="left-url" placeholder="无" value="{{$wxMenu->left_url}}">
                                @include('layouts.message.tips',['field'=>'left-url'])
                            </div>
                        </div>

                        <ul class="breadcrumb">
                            <li><a href="#">右侧一级菜单设置</a> <span class="divider"></span></li>
                        </ul>
                        <div class="form-group">
                            <label for="right-name" class="col-sm-4 control-label">菜单名称</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="right-name" name="right-name" placeholder="无" value="{{$wxMenu->right_name}}">
                                @include('layouts.message.tips',['field'=>'right-name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="right-url" class="col-sm-4 control-label">跳转网址</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="right-url" name="right-url" placeholder="无" value="{{$wxMenu->right_url}}">
                                @include('layouts.message.tips',['field'=>'right-url'])
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{route('menu.index')}}">返回</a>
                        <button type="submit" class="btn btn-primary pull-right">提 交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
