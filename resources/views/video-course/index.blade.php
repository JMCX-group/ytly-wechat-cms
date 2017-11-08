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
        <div class="col-md-1">
            <div class="small-box">
                <a href="{{URL::to('video-course/create')}}" class="btn btn-success">上传视频</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$page_title}}</h3>
                    <div class="box-tools pull-right">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="快速查询">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default disabled">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>标题</th>
                            <th>系列</th>
                            <th>课时序号</th>
                            <th>描述</th>
                            <th>管理操作</th>
                        </tr>
                        @forelse($videos as $video)
                            <tr>
                                <td class="col-md-1">{{$video->id}}</td>
                                <td class="col-md-2">{{$video->unsigned_name}}</td>
                                <td class="col-md-2">{{$video->series_name}}</td>
                                <td class="col-md-1">{{$video->num}}</td>
                                <td class="col-md-5">{{$video->desc}}</td>
                                <td class="col-md-1">
                                    <a class="btn btn-info" href="{{URL::to('video-course/'.$video->id.'/edit')}}">
                                        编辑
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">暂无数据</td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                @if($videos->render() !== "")
                    <div class="box-footer">
                        {!! $videos->render() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
@section('script')
    <script type="text/javascript">
        $('#defalutModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var url = button.data('url');
            var modal = $(this);

            modal.find('form').attr('action', url);
        })
    </script>
@stop
@section('style')
    <style>
        td {
            vertical-align: middle!important;
        }
    </style>
@stop
