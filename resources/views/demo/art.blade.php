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
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc1"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc2"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc3"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc4"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc5"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc6"></audio>

<div class="container">
    {{--<div class="row clearfix" style="text-align: center; margin-top: 30px;">--}}
    {{--<div class="col-xs-12 column imgs-class">--}}
    {{--<img src="/imgs/01.jpg"/>--}}
    {{--</div>--}}
    {{--<div class="col-xs-12 column imgs-class">--}}
    {{--<img src="/imgs/02.jpg"/>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="row clearfix" style="margin-top: 30px;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column">
            <blockquote>
                <p>
                    Everything you can imagine is real.

                </p> <small><cite>Pablo Picasso</cite></small>
            </blockquote>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/imgs/03.jpg"/>
        </div>
    </div>
    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column class-title">
            <p>Topic:</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p>美术要用的工具(Art Tools)</p>
        </div>
    </div>

    {{--内容一：--}}
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>1.</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-success">Pencil </strong><small>[ˈpensl] n. 铅笔</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/imgs/pencil.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc1">
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

    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title">
            <p><strong>Example:</strong></p>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>1).</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p>“The <strong class="text-success">pencil</strong> is blunt.”</p>
            <p>"<strong class="text-success">铅笔</strong>秃了。"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc2">
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

    <div class="row clearfix" style="margin-top: 30px;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>2).</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p>“You nearly poked me in the eye with your <strong class="text-success">pencil</strong>!”</p>
            <p>"你的<strong class="text-success">铅笔</strong>差点戳了我的眼睛！"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc3">
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


    {{--内容二：--}}
    <div class="row clearfix" style="margin-top: 50px;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>2.</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-success">Eraser </strong><small>[ɪ'reɪzə(r)] n. 橡皮擦</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/imgs/eraser.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc4">
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

    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title">
            <p><strong>Example:</strong></p>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>1).</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p>“Is this your <strong class="text-success">eraser</strong> ?”</p>
            <p>"是你的<strong class="text-success">橡皮</strong>？"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc5">
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

    <div class="row clearfix" style="margin-top: 30px;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>2).</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p>“I scrubbed them out with the <strong class="text-success">eraser</strong>!”</p>
            <p>"我用<strong class="text-success">铅笔</strong>把它们完全擦掉了！"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc6">
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

</div>
@stop
