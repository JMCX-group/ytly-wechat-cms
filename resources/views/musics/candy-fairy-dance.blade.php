<?php
/**
 * Created by PhpStorm.
 * User: mvp_xuan
 * Date: 2017-5-4
 * Time: 19:22
 */
?>
@extends("layouts.main-music")
@section("content")
    <div class="container">
        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img style="width: 300px;" src="/assets/images/music-bg/candy-fairy-dance.png"/>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 25px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <hr style="border:1px #929292 solid;" />
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <marquee style="height: 300px" scrollamount="3" direction="up">
                    <p style="margin-top: 5px; text-align: center;">
                        <strong>《糖果仙子之舞》[俄]柴可夫斯基 （1840 -1893）</strong>
                    </p>
                    <p style="margin-top: 5px;">
                        乐曲介绍：
                    </p>
                    <p style="margin-top: 5px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        《糖果仙子之舞》是由柴可夫斯基作曲的芭蕾舞剧《胡桃夹子》里的片段，是一首具有梦幻奇妙色彩的乐曲。
                    </p>
                    <p style="margin-top: 5px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        主旋律由钢片琴演奏，除此之外还加上了圆号和英国管与低音单簧管，这样的乐曲组合使乐曲更加富于童话色彩。
                    </p>
                    <p style="margin-top: 5px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        神秘魔幻的音乐色彩，能更好地表现出中糖果仙子音乐的魔力，并增强故事《藤蔓的秘密》的魔幻感和奇妙性。
                    </p>
                </marquee>
            </div>
            <div class="col-xs-1 column"></div>
        </div>

        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <hr style="border:1px #929292 solid;" />
            </div>
        </div>

        <div id="player1" class="aplayer"></div>
    </div>
@stop
