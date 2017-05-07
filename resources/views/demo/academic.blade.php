<?php
/**
 * Created by PhpStorm.
 * User: mvp_xuan
 * Date: 2017-5-4
 * Time: 19:22
 */
?>
@extends("layouts.main-class")
@section("content")

    @foreach($audioData as $key=>$datum)
        <audio src="{{$datum}}" controls="controls" id="{{'audioSrc' . ($key + 1)}}"></audio>
    @endforeach

    <div class="container">
        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-11 column">
                <blockquote>
                    <p>
                        Math can be confusing and scary.
                        But it doesn’t have to be!
                        I’ll decode the mystery (and fear) behind all aspects of math, helping you make sense of the math in your life.
                    </p><small><cite>The Math Wes</cite></small>
                </blockquote>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-public/03.jpg"/>
            </div>
        </div>
        <div class="row clearfix class-row">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column class-title">
                <p>Topic:</p>
            </div>
            <div class="col-xs-9 column class-title">
                <p>如何读数位(How to read place value)</p>
            </div>
        </div>

        @foreach($data as $key=>$datum)
            <div class="row clearfix">
                <div class="col-xs-12 column imgs-class">
                    <img src="{{$datum['imgUrl']}}" width="180px"  class="img-rounded" />
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-1 column class-title">
                    <p><strong class="text-danger">·</strong></p>
                </div>
                <div class="col-xs-9 column class-title">
                    <p><strong class="text-danger">{{$datum['txtTitle']}}</strong>
                        @if($datum['isBr'] == true)
                            <br>
                        @endif
                        <small>{{$datum['txtContent']}}</small>
                    </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc' . ($key + 1)}}">
                        <div class="col-xs-1 column">
                            <span class="icon_audio_bkg"></span>
                            <span class="icon_audio_playing"></span>
                        </div>
                        <div class="col-xs-8 column text-left ">
                            <span class="audio_seconds"></span>
                        </div>
                    </div>
                    <!-- why end: 这一段是播放器的 -->
                </div>
            </div>

            @if(!isset($datum['last']))
                <div class="row clearfix">
                    <div class="col-xs-1 column"></div>
                    <div class="col-xs-10 column">
                        <hr style="border:1px #47afea solid;" />
                    </div>
                </div>
            @endif
        @endforeach

        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-12 column" style="text-align: center; font-size: 24px; font-family:'Comic Sans MS',微软雅黑;">
                <p class="text-muted">
                    END
                </p>
            </div>
        </div>

    </div>
@stop
