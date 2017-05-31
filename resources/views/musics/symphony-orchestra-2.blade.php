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


    <audio src="/audios/0523/1.开场白-鲁颖-0519.mp3" controls="controls" id="audioSrc1"></audio>
    <audio src="/audios/0523/2.故事+鲁颖+0519.mp3" controls="controls" id="audioSrc2"></audio>

    <audio src="/audios/0523/3.海顿《惊愕》选段+鲁颖+2017.5.19.mp3" controls="controls" id="audioSrc3"></audio>
    <audio src="/audios/0523/4.交响乐+鲁颖-0519.mp3" controls="controls" id="audioSrc4"></audio>
    <audio src="/audios/0523/5.交响乐团+鲁颖+0519.mp3" controls="controls" id="audioSrc5"></audio>
    <audio src="/audios/0523/6.弦乐组+鲁颖+0519.mp3" controls="controls" id="audioSrc6"></audio>

    <audio src="/audios/0523/7.木管组+鲁颖+0519.mp3" controls="controls" id="audioSrc7"></audio>
    <audio src="/audios/0523/8.铜管组+鲁颖+0519.mp3" controls="controls" id="audioSrc8"></audio>
    <audio src="/audios/0523/9.打击乐+鲁颖+0519.mp3" controls="controls" id="audioSrc9"></audio>
    <audio src="/audios/0523/10.指挥+鲁颖+0519.mp3" controls="controls" id="audioSrc10"></audio>

    <audio src="/audios/0523/11.音乐+鲁颖+0519.mp3" controls="controls" id="audioSrc11"></audio>
    <audio src="/audios/0523/12.音乐会+鲁颖+0519.mp3" controls="controls" id="audioSrc12"></audio>
    <audio src="/audios/0523/13.你平常喜欢听音乐吗？+鲁颖+0519.mp3" controls="controls" id="audioSrc13"></audio>
    <audio src="/audios/0523/14.是+鲁颖+0519.mp3" controls="controls" id="audioSrc14"></audio>

    <audio src="/audios/0523/15.我知道+鲁颖+0519.mp3" controls="controls" id="audioSrc15"></audio>
    <audio src="/audios/0523/16.哇+鲁颖+0519.mp3" controls="controls" id="audioSrc16"></audio>
    <audio src="/audios/0523/17.是由+鲁颖+0519.mp3" controls="controls" id="audioSrc17"></audio>
    <audio src="/audios/0523/18.结束语-鲁颖-0523.mp3" controls="controls" id="audioSrc18"></audio>

    <div class="container">
        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-11 column">
                <blockquote>
                    <p>Without music, life would be a mistake.</p>
                    <p>没有音乐，生命将是一个错误。</p>
                    <small>
                        <cite>Friedrich Nietzsche 弗里德里希·威廉·尼采</cite>
                    </small>
                </blockquote>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 60px">
            <div class="col-xs-12 column imgs-class">
                <div style="position: absolute; text-align: center; width: 394px; top: 18px; font-size: 20px;">
                    <p style="color: #453e4d">
                        <span>Topic: 交响乐团 (Symphony Orchestra)</span>
                    </p>
                </div>
                <img src="/assets/images/class-content/egyptian/font-bg.png"/>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p style="color: black;">
                    <strong class="text-danger">·</strong>
                    <span> Hello~大家好，我是你们的</span>
                    <strong style="font-size: 20px; color: #68389a;">鲁老师</strong>
                </p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-0512-1.png" class="img-avatar img-rounded"/>
            </div>
            <div class="col-xs-7 column">
                <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc1'}}">
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
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> 是否感觉音乐的世界很神秘？</p>
                <p><strong class="text-danger">·</strong> 是否感觉音乐很难学？</p>
                <p><strong class="text-danger">·</strong> 其实音乐很简单，它就在你的身边！而高高在上的音乐家也和我们一样有着喜怒哀乐。跟鲁老师一起走进音乐的世界吧！</p>
            </div>
        </div>


        {{--Part 1 --}}
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p style="color: black;">
                    <strong style="font-size: 28px; color: #fffd54;text-shadow:2px 2px 0 orange; "> { Part 1 } </strong>
                    <span> 海顿的《惊愕交响曲》</span>
                </p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-0512-1.png" class="img-avatar img-rounded"/>
            </div>
            <div class="col-xs-7 column">
                <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc2'}}">
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
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>我们印象中的海顿爸爸是这样的…… </p>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/haidun.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>然而内心咆哮创作完《惊愕交响曲》的海顿爸爸很可能是这样的…… </p>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/haidun2.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>请听 《惊愕交响曲》 第二乐章片段:</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-0512-1.png" class="img-avatar img-rounded"/>
            </div>
            <div class="col-xs-7 column">
                <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc3'}}">
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


        {{--Part 2 --}}
        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p style="color: black;">
                    <strong style="font-size: 28px; color: #fffd54;text-shadow:2px 2px 0 orange; "> { Part 2 } </strong>
                    <span> 单词及发音</span>
                </p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>①  n. 交响乐:</p>
            </div>
        </div>
        @foreach($part2Data1 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                        <span>{{$datum['txt3']}}</span>
                        @if(isset($datum['txt4']))
                            <span style="color: #ec3568; font-size: 20px;">{{$datum['txt4']}}</span>
                        @endif
                        @if(isset($datum['txt5']))
                            <span>{{$datum['txt5']}}</span>
                        @endif
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc4'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/symphony.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>②  n. 交响乐团:</p>
            </div>
        </div>
        @foreach($part2Data2 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-2 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc5'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/string-group.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>③ 弦乐组:</p>
            </div>
        </div>
        @foreach($part2Data3 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-2 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc6'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/wood-group.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>④ 木管组:</p>
            </div>
        </div>
        @foreach($part2Data4 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-2 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc7'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/brass-group.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>⑤ 铜管组:</p>
            </div>
        </div>
        @foreach($part2Data5 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                        <span>{{$datum['txt3']}}</span>
                        @if(isset($datum['txt4']))
                            <span style="color: #ec3568; font-size: 20px;">{{$datum['txt4']}}</span>
                        @endif
                        @if(isset($datum['txt5']))
                            <span>{{$datum['txt5']}}</span>
                        @endif
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc8'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/percussion.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>⑥ 打击乐组:</p>
            </div>
        </div>
        @foreach($part2Data6 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-2 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc9'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-12 column imgs-class">
                <img src="/assets/images/class-content/symphony-orchestra/command.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>⑦ 指挥:</p>
            </div>
        </div>
        @foreach($part2Data7 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc10'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>⑧ 音乐:</p>
            </div>
        </div>
        @foreach($part2Data8 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc11'}}">
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
        @endforeach

        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>⑨ 音乐会:</p>
            </div>
        </div>
        @foreach($part2Data9 as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p>
                        <span>{{$datum['txt1']}}</span>
                        <span style="color: #ec3568; font-size: 20px;">{{$datum['txt2']}}</span>
                        <span>{{$datum['txt3']}}</span>
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc12'}}">
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
        @endforeach


        {{--Part 3 --}}
        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p style="color: black;">
                    <strong style="font-size: 28px; color: #fffd54;text-shadow:2px 2px 0 orange; "> { Part 3 } </strong>
                    <span> 常用的句子</span>
                </p>
            </div>
        </div>
        @foreach($part3Data as $key=>$datum)
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column class-title">
                    <p><span>{{$datum['txt1']}}</span></p>
                    <p>
                    @if($key == 1)
                            <span>{{$datum['txt2']}}</span>
                    @else
                        @if($key == 4)
                            <span>{{$datum['txt2']}}</span>
                            <span style="color: orange">{{$datum['txt3']}}</span>
                            <span>{{$datum['txt4']}}</span>
                            <span style="color: orange">{{$datum['txt5']}}</span>
                            <span>{{$datum['txt6']}}</span>
                            <span style="color: orange">{{$datum['txt7']}}</span>
                            <span>{{$datum['txt8']}}</span>
                        @else
                            <span>{{$datum['txt2']}}</span>
                            <span style="color: orange">{{$datum['txt3']}}</span>
                            <span>{{$datum['txt4']}}</span>
                        @endif
                    @endif
                    </p>
                </div>
            </div>
            <div class="row clearfix" style="margin-top: 15px;">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-2 column">
                    <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
                </div>
                <div class="col-xs-7 column">
                    <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                    <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc' . ($key + 13)}}">
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
        @endforeach


        <div class="row clearfix" style="margin-top: 60px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="{{$datum['imgUrl']}}" class="img-avatar img-rounded"/>
            </div>
            <div class="col-xs-7 column">
                <!-- why begin: 这一段是播放器的class什么的不用管，主要是那个data-target，里面是 #+要播放的audio标签的id -->
                <div class="row clearfix img-rounded audio_play_cell" data-target="{{'#audioSrc18'}}">
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
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p>
                    1. 聆听完整的海顿《惊愕交响曲》第二乐章，请打开下面链接：
                    <a href="http://music.163.com/#/song?id=30245739&userid=486529790">点击我吧</a>
                </p>
                <p>
                    2. 音乐会推荐：
                    国家大剧院-费城交响乐团5.30-5.31演奏贝多芬和勃拉姆斯交响曲音乐会，有兴趣的可以去现场听听，运用所学的单词和句子来邀请朋友和你一起去看吧~~
                </p>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 60px;">
            <div class="col-xs-12 column" style="text-align: center; font-size: 24px; font-family:'Comic Sans MS',微软雅黑;">
                <p class="text-muted">
                    END
                </p>
            </div>
        </div>
    </div>
@stop
