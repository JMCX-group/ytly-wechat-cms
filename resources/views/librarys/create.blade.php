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
                <form class="form-horizontal" action="{{URL::to('library')}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="unsigned_name" class="col-sm-2 control-label">自定义文件名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="unsigned_name" name="unsigned_name" placeholder="自定义文件名" value="">
                                @include('layouts.message.tips',['field'=>'unsigned_name'])
                                <p class="help-block">这个是用来统一命名上传的音乐文件名、背景图名称以及二维码文件名的，要求是没有中文和中文符号以及空格等特殊符号。</p>
                                <p class="help-block">假设实际上传的文件是：2.1 《糖果仙子之舞》[俄]柴可夫斯基</p>
                                <p class="help-block">则建议命名：</p>
                                <p class="help-block">第一种：2.1TangGuoXianZiZhiWu-PyotrIlyichTchaikovsky</p>
                                <p class="help-block">第二种：2.1tangguoxianzizhiwu-chaikefusiji</p>
                                <p class="help-block">第三种：tgxzzw-ckfsj</p>
                                <p class="help-block">如果这里不填，则会自动生成数字的名称：20171010121010（2017年10月10日12点10分10秒上传）</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="m_title" class="col-sm-2 control-label">网页标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="m_title" name="m_title" placeholder="网页标题" value="">
                                @include('layouts.message.tips',['field'=>'m_title'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="m_content" class="col-sm-2 control-label">故事内容</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name='m_content' rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_title" class="col-sm-2 control-label">音乐标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="p_title" name="p_title" placeholder="音乐标题" value="">
                                @include('layouts.message.tips',['field'=>'p_title'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_author" class="col-sm-2 control-label">音乐作者</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="p_author" name="p_author" placeholder="音乐作者" value="">
                                @include('layouts.message.tips',['field'=>'p_author'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="music_b_url" class="col-sm-2 control-label">音乐背景图</label>
                            <div class="col-sm-9">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_music_b_icon">上传音乐背景图</i>
                                    <input name="upload_music_b_img" id="upload_music_b_img" type="file" />
                                </div>
                                <p class="help-block">用于展示在网页顶部的情景背景图，建议是宽幅的</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_player_b_url" class="col-sm-2 control-label">播放器背景图</label>
                            <div class="col-sm-9">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_player_b_icon">上传播放器背景图</i>
                                    <input name="upload_player_b_img" id="upload_player_b_img" type="file" />
                                </div>
                                <p class="help-block">用于展示在音乐播放器的背景图，建议是方形的；如果没有上传，自动引用音乐背景图</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_music_url" class="col-sm-2 control-label">音乐文件</label>
                            <div class="col-sm-9">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_music_icon">上传音乐文件</i>
                                    <input name="upload_music" id="upload_music" type="file" />
                                </div>
                                <p class="help-block">用于播放的音乐文件</p>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a class="btn btn-default" href="{{route('library.index')}}">返回</a>
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
        $("#upload_music_b_img").on('change', function () {
            $("#upload_music_b_icon").text($("#upload_music_b_img").val());
        });

        $("#upload_player_b_img").on('change', function () {
            $("#upload_player_b_icon").text($("#upload_player_b_img").val());
        });

        $("#upload_music").on('change', function () {
            $("#upload_music_icon").text($("#upload_music").val());
        });
    </script>
@stop
