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
                <form class="form-horizontal" action="{{URL::to('library/' . $music->id)}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put">
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="unsigned_name" class="col-sm-2 control-label">自定义文件名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="unsigned_name" name="unsigned_name" disabled placeholder="自定义文件名" value="{{$music->unsigned_name}}">
                                @include('layouts.message.tips',['field'=>'unsigned_name'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="m_title" class="col-sm-2 control-label">网页标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="m_title" name="m_title" placeholder="网页标题" value="{{$music->m_title}}">
                                @include('layouts.message.tips',['field'=>'m_title'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="m_content" class="col-sm-2 control-label">故事内容</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name='m_content' rows="5">{{$music->m_content}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_title" class="col-sm-2 control-label">音乐标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="p_title" name="p_title" placeholder="音乐标题" value="{{$music->p_title}}">
                                @include('layouts.message.tips',['field'=>'p_title'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_author" class="col-sm-2 control-label">音乐作者</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="p_author" name="p_author" placeholder="音乐作者" value="{{$music->p_author}}">
                                @include('layouts.message.tips',['field'=>'p_author'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="music_b_url" class="col-sm-2 control-label">音乐背景图</label>
                            <div class="col-sm-9">
                                <div>
                                    <img src="{{'http://wx.yitongliuyi.com/' . $music->m_pic}}" alt="image without thumbnail corners" style="width: 350px;">
                                </div>
                                <br />
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_music_b_icon">上传新的音乐背景图</i>
                                    <input name="upload_music_b_img" id="upload_music_b_img" type="file" />
                                </div>
                                <p class="help-block">用于展示在网页顶部的情景背景图，建议是宽幅的</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_player_b_url" class="col-sm-2 control-label">播放器背景图</label>
                            <div class="col-sm-9">
                                <div>
                                    <img src="{{'http://wx.yitongliuyi.com/' . $music->p_pic}}" alt="image without thumbnail corners" style="width: 350px;">
                                </div>
                                <br />
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_player_b_icon">上传新的播放器背景图</i>
                                    <input name="upload_player_b_img" id="upload_player_b_img" type="file" />
                                </div>
                                <p class="help-block">用于展示在音乐播放器的背景图，建议是方形的；如果没有上传，自动引用音乐背景图</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_music_url" class="col-sm-2 control-label">音乐文件</label>
                            <div class="col-sm-9">
                                <div>
                                    <audio controls>
                                        <source src="{{'http://wx.yitongliuyi.com' . $music->p_url}}" type="audio/mpeg">
                                    </audio>
                                </div>
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip" id="upload_music_icon">上传新的音乐文件</i>
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
