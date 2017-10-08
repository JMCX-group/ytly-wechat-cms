<?php
/**
 * Created by PhpStorm.
 * User: mvp_xuan
 * Date: 2017-5-4
 * Time: 19:22
 */
?>
@extends("layouts.main-music-qr")
@section("content")
    <div class="container">
        <div class="row clearfix" style="margin-top: 40px;">
            <div class="col-xs-12 column imgs-class">
                <img style="max-width: 300px; max-height: 200px;" src="{{$musicData['pic']}}"/>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 20px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <hr style="border:1px #929292 solid;" />
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <marquee style="height: 270px" scrollamount="3" direction="up">
                    <p style="margin-top: 5px; text-align: center;">
                        <strong>{{$musicData['title']}}</strong>
                    </p>
                    <p style="margin-top: 5px;">
                        乐曲介绍：
                    </p>
                    @forelse($musicData['content'] as $val)
                        <p style="margin-top: 5px;">
                            {{$val . "。"}}
                        </p>
                    @empty
                        <p style="margin-top: 5px;"></p>
                    @endforelse
                </marquee>
            </div>
            <div class="col-xs-1 column"></div>
        </div>

        <div id="player" class="aplayer"></div>
        <div id="player-title" hidden value="{{$player['title']}}"></div>
        <div id="player-author" hidden value="{{$player['author']}}"></div>
        <div id="player-url" hidden value="{{$player['url']}}"></div>
        <div id="player-pic" hidden value="{{$player['pic']}}"></div>
    </div>
@stop
