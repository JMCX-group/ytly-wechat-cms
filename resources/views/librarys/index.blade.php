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
                <a href="{{URL::to('library/create')}}" class="btn btn-success">上传音乐</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">音乐列表</h3>
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
                            <th>描述</th>
                            <th>音乐名称</th>
                            <th>音乐作者</th>
                            {{--<th>音乐</th>--}}
                            <th>音乐背景图</th>
                            <th>音乐播放器图</th>
                            <th>二维码</th>
                            <th>管理操作</th>
                        </tr>
                        @forelse($library as $music)
                            <tr>
                                <td>{{$music->id}}</td>
                                <td>{{$music->m_title}}</td>
                                <td style="max-width: 420px">{{$music->m_content}}</td>
                                <td>{{$music->p_title}}</td>
                                <td>{{$music->p_author}}</td>
                                {{--<td style="max-width: 100px">--}}
                                    {{--<audio controls style="max-width: 100px">--}}
                                        {{--<source src="{{'http://wx.yitongliuyi.com' . $music->p_url}}" type="audio/mpeg">--}}
                                    {{--</audio>--}}
                                {{--</td>--}}
                                <td><img src="{{'http://wx.yitongliuyi.com/' . $music->m_pic}}" style="width: 90px;"></td>
                                <td><img src="{{'http://wx.yitongliuyi.com/' . $music->p_pic}}" style="width: 90px;"></td>
                                <td><img src="{{'http://wx.yitongliuyi.com/' . $music->qr_code_pic}}" style="width: 90px;"></td>
                                <td>
                                    <a class="btn btn-info" href="{{URL::to('library/'.$music->id.'/edit')}}">
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

                @if($library->render() !== "")
                    <div class="box-footer">
                        {!! $library->render() !!}
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