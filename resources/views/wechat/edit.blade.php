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
                {{--<form class="form-horizontal" action="{{URL::to('menu/'.$config->id)}}" method="post" enctype="multipart/form-data">--}}
                <form class="form-horizontal" action="{{URL::to('menu/1')}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put">
                    </div>
                    <div class="box-body">
                        <ul class="breadcrumb">
                            <li><a href="#">菜单设置</a> <span class="divider"></span></li>
                        </ul>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">菜单名称</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="name" name="name" placeholder="无" value="">
                                @include('layouts.message.tips',['field'=>'name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-sm-4 control-label">菜单URL</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="url" name="url" placeholder="无" value="">
                                @include('layouts.message.tips',['field'=>'url'])
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
