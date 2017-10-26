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
        <div class="col-md-12">
            <div class="box box-info">
                <form class="form-horizontal" action="{{URL::to('video-series')}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">系列名称</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="系列名称" value="{{old('name')}}">
                                @include('layouts.message.tips',['field'=>'name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="count" class="col-sm-3 control-label">课时数量</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="count" name="count" placeholder="课时数量" value="{{old('count')}}">
                                @include('layouts.message.tips',['field'=>'count'])
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{route('video-series.index')}}">返回</a>
                        <button type="submit" class="btn btn-danger pull-right">确 定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
