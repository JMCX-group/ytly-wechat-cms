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
                <form class="form-horizontal" action="{{URL::to('video-course/' . $video->id)}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put">
                    </div>
                    <div class="box-body">

                        <div class="form-group">
                            <label for="series_id" class="col-sm-2 control-label">所属系列</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="series_id">
                                    @forelse($series as $item)
                                        @if($video['series_id'] == $item['id'])
                                            <option value="{{$item['id']}}" selected>{{$item['name']}}</option>
                                        @else
                                            <option value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endif
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
                                <input type="text" class="form-control" id="unsigned_name" name="unsigned_name" disabled placeholder="自定义文件名" value="{{$video->unsigned_name}}">
                                @include('layouts.message.tips',['field'=>'unsigned_name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="num" class="col-sm-2 control-label">课时序号</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="num" name="num" placeholder="课时序号" value="{{$video->num}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="col-sm-2 control-label">视频描述</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="desc" name="desc" placeholder="视频描述" value="{{$video->desc}}">
                                @include('layouts.message.tips',['field'=>'desc'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_video_url" class="col-sm-2 control-label">视频文件</label>
                            <div class="col-sm-9">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_video_icon">上传新的视频文件</i>
                                    <input name="upload_video" id="upload_video" type="file" />
                                </div>
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
