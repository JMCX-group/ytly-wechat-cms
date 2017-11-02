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
                            <th>头像</th>
                            <th>昵称</th>
                            <th>姓名</th>
                            <th>课程系列</th>
                            <th>已下载课程序号</th>
                            <th>状态</th>
                            <th>管理操作</th>
                        </tr>
                        @forelse($lists as $list)
                            <tr>
                                <td>{{$list['id']}}</td>
                                <td><img src="{{$list['head_img_url']}}" style="width: 45px;"></td>
                                <td>{{$list['nickname']}}</td>
                                <td>{{$list['name']}}</td>
                                <td>{{$list['series_name']}}</td>
                                <td>{{$list['num']}}</td>
                                <td>{{$list['status']}}</td>
                                <td>
                                    {{--// 两种状态：已完成、已下载--}}
                                    @if($list['status'] == '已下载')
                                        <a class="btn btn-info" onclick="ajaxCompleted({{$list['id']}})" id="complete_{{$list['id']}}" href="javascript:void(0)">
                                            完成该课程
                                        </a>
                                    @else
                                        <a class="btn btn-info" disabled="disabled" href="#">
                                            还未下载
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">暂无数据</td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                @if($lists->render() !== "")
                    <div class="box-footer">
                        {!! $lists->render() !!}
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

            modal.find('form').attr('action', idurl);
        })

        /**
         * Ajax请求完成
         * @param id
         */
        function ajaxCompleted(id) {
            var url = 'video-download-list/completed/' + id;
            $.ajax({
                url: url,
                type: 'GET', //POST
                async: true, //或false,是否异步
                timeout: 5000,    //超时时间
                dataType: 'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                complete: function () {
                    var $completeId = $('#complete_' + id);
                    $completeId.attr('disabled', 'disabled');
                    $completeId.text('还未下载');
                }
            })
        }
    </script>
@stop
@section('style')
    <style>
        td {
            vertical-align: middle!important;
        }
    </style>
@stop
