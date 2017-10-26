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
                <form class="form-horizontal" action="{{URL::to('video-course')}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属系列</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="series_id">
                                    @forelse($series as $item)
                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @empty
                                        <option value="0">无</option>
                                    @endforelse
                                </select>
                                @include('layouts.message.tips',['field'=>'series_id'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unsigned_name" class="col-sm-2 control-label">自定义文件名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="unsigned_name" name="unsigned_name" placeholder="自定义文件名" value="">
                                @include('layouts.message.tips',['field'=>'unsigned_name'])
                                <p class="help-block">注意：一旦提交此项不可修改！！！</p>
                                <p class="help-block">这个是用来统一命名上传的视频文件名，要求是没有中文和中文符号以及空格等特殊符号。</p>
                                <p class="help-block">建议命名（假设视频内容是钢琴课的指法练习）：</p>
                                <p class="help-block">第一种：Piano-Series-FingeringPractice</p>
                                <p class="help-block">第二种：GangQin-KeCheng-ZhiFaLianXi</p>
                                <p class="help-block">如果这里不填，则会自动生成数字的名称：20171010121010（2017年10月10日12点10分10秒上传）</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_video_url" class="col-sm-2 control-label">视频文件</label>
                            <div class="col-sm-9">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_video_icon">上传视频文件</i>
                                    <input name="upload_video" id="upload_video" type="file" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="col-sm-2 control-label">描述信息</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="desc" name="desc" placeholder="描述信息" value="">
                                @include('layouts.message.tips',['field'=>'desc'])
                            </div>
                        </div>
                        <div class="box-footer">
                            <a class="btn btn-default" href="{{route('video-course.index')}}">返回</a>
                            <button type="submit" class="btn btn-success pull-right">确 定</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $("#upload_video").on('change', function () {
            $("#upload_video_icon").text($("#upload_video").val());
        });
    </script>
@stop
