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
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc7"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc8"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc9"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc10"></audio>
<audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc11"></audio>

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

    {{--内容一：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/hundredth.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Hundredth</strong><small> [ˈhʌndrədθ] n. 百分之一</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容二：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/tenths.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Tenths</strong><small> [tenθ] n. 十分之一</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容三：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/decimal-point.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Decimal point</strong><small> [ˈdesiməl pɔint] n.小数点</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容四：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/ones.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Ones</strong><small> ['wʌnz] n. 个位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容五：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/tens.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Tens</strong><small> ['tenz] n. 十位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容六：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/hundreds.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Hundreds</strong><small> ['hʌndrədz] n. 百位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容七：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/thousands.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Thousands</strong><small> ['θaʊzndz] n. 千位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc7">
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容八：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/tens-of-thousands.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Tens of thousands</strong><br/><small> ['tenz,əv'θaʊzndz] n. 万位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc8">
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容九：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/hundreds-of-thousands.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Hundreds of thousands</strong><br/><small> [''hʌndrədz,əv'θaʊzndz] n. 十万位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc9">
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容十：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/millions.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">Millions</strong><small> ['mɪlɪənz] n. 百万位</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-academic.png" class="img-avatar img-rounded"/>
        </div>
        <div class="col-xs-7 column">
            <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc10">
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
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <hr style="border:1px #47afea solid;" />
        </div>
    </div>

    {{--内容十一：--}}
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/academic/place-value.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p><strong class="text-danger">·</strong></p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-danger">
                    five millions three hundreds and twenty thousands seven hundreds and eighty-six point four one
                </strong>
                <br/>
                <small>5,320,786.41</small>
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
            <div class="row clearfix img-rounded audio_play_cell" data-target="#audioSrc11">
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
        <div class="col-xs-12 column" style="text-align: center; font-size: 24px; font-family:'Comic Sans MS',微软雅黑;">
                <p class="text-muted">
                    END
                </p>
        </div>
    </div>

</div>
@stop
