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
<audio src="/audios/english-art/开场白-cici-0523.mp3" controls="controls" id="audioSrc1"></audio>
<audio src="/audios/english-art/铅笔君中文+cici+0523.mp3" controls="controls" id="audioSrc2"></audio>
<audio src="/audios/english-art/铅笔君英文+cici+0523.mp3" controls="controls" id="audioSrc3"></audio>
<audio src="/audios/english-art/橡皮君中文+cici+0523.mp3" controls="controls" id="audioSrc4"></audio>
<audio src="/audios/english-art/橡皮君英文+cici+0523.mp3" controls="controls" id="audioSrc5"></audio>
<audio src="/audios/english-art/纸君中文+cici+0523.mp3" controls="controls" id="audioSrc6"></audio>
<audio src="/audios/english-art/纸君英文+cici+0523.mp3" controls="controls" id="audioSrc7"></audio>
<audio src="/audios/english-art/总结-cici-0523.mp3" controls="controls" id="audioSrc8"></audio>
<audio src="/audios/english-art/画外音-cici-0523.mp3" controls="controls" id="audioSrc9"></audio>

<div class="container">
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/english-art/banner.png"/>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img width="330px" src="/assets/images/class-content/english-art/banner-2.png"/>
        </div>
    </div>


    <div class="row clearfix" style="margin-top: 15px; text-align: left;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column class-title">
            <p>那就让我</p>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 15px;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
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

    <div class="row clearfix" style="margin-top: 15px; text-align: center;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column">
            <p>
                <span style="color: green;">CICI</span>
                <span>
                    老师来带大家看看到底发生了什么！
                </span>
            </p>
            <p>绘画基础部的三剑客分别是：<br>铅笔君、橡皮君、纸君</p>
            <p>他们每个人都觉得自己在绘画里的功能是最棒的，并且每个人都有着自己的道理。</p>
        </div>
    </div>


    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column class-title class-title-color">
            <p>Topic:</p>
        </div>
        <div class="col-xs-9 column class-title class-title-color">
            <p>绘画要用的工具(Painting Tools)</p>
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
            <img src="/assets/images/class-content/art/pencil.png" width="180px"  class="img-rounded" />
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
    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title class-font-body">
            <p><strong>大家好，我是铅笔君，我觉得在绘画过程里我是最重要的，无论是在基础部还是高级部没有我就画不成画，素描需要我，色彩打底稿需要我，还有很多表现形式需要我。所以我是最重要的比其他两位都重要，哼~</strong></p>
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
    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title class-font-body">
            <p>1, Hello, I'm Mr. Pencil. I think I'm the most important one in the process of painting.</p>
            <p>2, Two words: Department of Basic, Advanced department.</p>
            <p>3, Two words: Sketch/Colouring: There are two courses during the Basic Painting Course: "Sketch"and"Colouring".</p>
            <p>4, one word: Expression: There are all sort of expression in painting.</p>
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
            <img src="/assets/images/class-content/art/eraser.png" width="180px"  class="img-rounded" />
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
        <div class="col-xs-11 column class-title class-font-body">
            <p><strong>大家好，我是橡皮擦君，我觉得在绘画过程中我才是最重要的。为什么这么说呢？比如铅笔君你画错了你怎么办？肯定是需要我来帮你改正错误，如果没有我，你就没有办法再继续描绘美好的未来，哼~所以我才是那个最重要的人。</strong></p>
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
    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title class-font-body">
            <p>1, Hello, I'm Mr. Eraser. I think <strong>I AM</strong> the most important one in the process of painting.</p>
            <p>2, Rhetorical question: Why do I say so?</p>
            <p>3, Example: What if your vision is wrong, Mr.Pencil?</p>
            <p>4, Affirmative: You certainly need my help you through slip-ups.</p>
            <p>5, Example: Without me, you hardly paint a pretty picture of future.</p>
        </div>
    </div>


    {{--内容三：--}}
    <div class="row clearfix" style="margin-top: 50px;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-1 column class-title">
            <p>3.</p>
        </div>
        <div class="col-xs-9 column class-title">
            <p><strong class="text-success">Paper </strong><small>['pepɚ]n. 纸</small></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/english-art/paper.png" width="180px"  class="img-rounded" />
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
    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title class-font-body">
            <p><strong>大家好，我是纸君，不是卫生纸的纸，而是画画的纸，我们也有很多的种类，而我则是高傲的大众基础款。也不知道铅笔君和橡皮君有什么可争执的，很明显如果没有我，他们一个在哪里画？一个在哪里改呢？毋庸置疑，我应该才是那个独一无二最重要的人。</strong></p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
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
    <div class="row clearfix class-row">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-11 column class-title class-font-body">
            <p>1, There are many kinds of paper, painting paper, toilet paper, but I AM GPBP! (General-Painting-Basic-Paper).</p>
            <p>2, Without me, what were you guys going to do?!</p>
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
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


    <div class="row clearfix" style="margin-top: 15px; text-align: center;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column class-font-body">
            <p>
                听他们陈述完，
                <span style="color: green;">CICI</span>
                老师实在是按捺不住了，我要告诉三剑客，你们需要清醒点，你们每个人说的都是对的，所以也证明你们每个人都很重要缺一不可，
                在一幅画作里没有你们任何人的存在都不能完成美丽的作品，SO从现在开始，你们要成为一个团队，有合作精神，发挥各自的长处，
                去描绘美好的未来。
            </p>
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/english-art/three-people.png" width="180px"  class="img-rounded" />
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/english-art/ATTENTION.png" width="210px"  class="img-rounded" />
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/audio-avatar/avatar-art.jpeg" class="img-avatar img-rounded"/>
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


    <div class="row clearfix" style="margin-top: 15px; text-align: center;">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-10 column class-font-body">
            <p>我一向敬慕莫奈的早期绘画</p>
            <p>I always admire monet’s early painting.</p>
            <p>莫奈真的来了</p>
            <p>MONET IS COMING...</p>
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-xs-12 column imgs-class">
            <img src="/assets/images/class-content/english-art/exhibition-information.png" width="300px"  class="img-rounded" />
        </div>
    </div>
</div>
@stop
