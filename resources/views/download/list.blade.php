<?php
/**
 * Created by PhpStorm.
 * User: mvp_xuan
 * Date: 2016-4-4
 * Time: 19:20
 */
?>

@extends('layouts.main-download')
@section('content')
    <div class="container">
        <div class="div-centered">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading text-center"><h4>{{$user_info['user_name']}}的文件列表</h4></div>

                                <!-- Table -->
                                <table class="table table-hover">
                                    <tr>
                                        <th class="text-center">名称</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    @forelse($list as $item)
                                        <tr>
                                            <td class="text-center">{{$item['name']}}</td>
                                            @if($item['status'] == 1)
                                                <td class="text-center"><a class="btn btn-success btn-block" name="btn-download" id="download-{{$item['id']}}" clicked="" href="{{URL::to('download/file/' . $item['id']. $user_info['phone'])}}">下载</a></td>
                                            @else
                                                <td class="text-center"><a class="btn btn-default btn-block" disabled>已下载</a></td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">暂无数据</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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

        $("a[name='btn-download']").click(function(){
            var changeId = $("#" + this.id);
            if(changeId.attr('clicked') !== 'clicked') {
                changeId.text("已下载");
                changeId.removeClass('btn-info')
                changeId.addClass('btn-default')
                changeId.attr('disabled', 'disabled')
                changeId.attr('clicked', 'clicked')
            } else {
                changeId.removeAttr('href', '')
                return false;
            }
        })
    </script>
@stop
