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
    <audio src="/audios/fel/part-1.mp3" controls="controls" id="audioSrc1"></audio>
    <audio src="/audios/fel/part-2.mp3" controls="controls" id="audioSrc2"></audio>

    <audio src="/audios/fel/Jessie-Ware.A-Dream-Is-a-Wish-Your-Heart-Makes.mp3" controls="controls" id="audioSrc3"></audio>
    <audio src="/audios/fel/Lily-James.A-Dream-Is-A-Wish-Your-Heart-Makes.mp3" controls="controls" id="audioSrc4"></audio>

    <audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc5"></audio>
    <audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc6"></audio>
    <audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc7"></audio>
    <audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc8"></audio>
    <audio src="http://www.helloweba.com/demo/html5audio/music.mp3" controls="controls" id="audioSrc9"></audio>

    <div class="container">
        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-11 column">
                <blockquote>
                    <p>
                        If more of us valued food and cheer and song above hoarded gold, it would be a merrier world."
                    </p><small><cite>J.R.R. Tolkien</cite></small>
                </blockquote>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 60px">
            <div class="col-xs-12 column imgs-class">
                <div style="position: absolute; text-align: center; width: 394px; top: 30px; font-size: 16px;">
                    <p style="color: black;">Topic: 辛德瑞拉 (Cinderella Around The Music)</p>
                </div>
                <img src="/assets/images/class-content/fel/fel-bg.png"/>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-9 column imgs-class" style="top:40px;">
                <p>
                    <span style="color: black;font-family: 'Comic Sans MS';">Hello, every~ 我是你们的</span>
                    <span><strong style="color: #b62fa8;font-family: 微软雅黑; font-size: 26px;">付</strong></span>
                    <span><strong style="color: #e771e1;font-family: 微软雅黑; font-size: 26px;">老</strong></span>
                    <span><strong style="color: #e3c27f;font-family: 微软雅黑; font-size: 26px;">师</strong></span>
                    <span style="color: black;font-family: 'Comic Sans MS';">:)</span>
                </p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-font-body">
                <p><strong class="text-danger" style="color: #dd3bd0">·</strong> 你是否经常觉得即使自己英文再好，也无法辅导孩子演唱英文歌曲？</p>
                <p><strong class="text-danger" style="color: #dd3bd0">·</strong> 你是否觉得自己孩子英语水平虽然不错，可遇到学习英文歌曲时依旧无法立刻找到感觉？</p>
                <p><strong class="text-danger" style="color: #dd3bd0">·</strong> 识英文字还不多的年龄段孩子到底该怎样正确学习英文歌曲呢？</p>
                <p><strong class="text-danger" style="color: #dd3bd0">·</strong> 其他语言的歌曲也希望孩子能学习原文版本？</p>
                <p><strong class="text-danger" style="color: #dd3bd0">·</strong> 没有请陪练，一周一节课的练习孩子进步太慢怎么办？</p>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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

        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-8 column" style="top:50px;">
                <p>
                    <span style="color: black;font-family: 微软雅黑;font-size: 15px;"><strong>就让付老师在这里助你一臂之力吧！</strong></span>
                </p>
            </div>
            <div class="col-xs-2 column">
                <img src="/assets/images/class-content/fel/arm.png" class="img-avatar img-rounded" style="width: 70px; height: 70px;"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-11 column">
                <p>
                    <span style="color: black;font-family: 微软雅黑;font-size: 15px;"><strong>今天要学习的是：</strong></span>
                </p>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 15px; text-align: center;">
            <div class="col-xs-12 column">
                <p style="color: yellow; font-size: 20px; text-shadow: 2px 2px 0 orange;">{ A dream is a wish your heart makes }</p>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/cyderella.png" class="img-avatar img-rounded" style="width: 80px;height: 140px; text-align: left;"/>
            </div>
            <div class="col-xs-7 column">
                <p>
                    <span style="color: black; font-family: 'Comic Sans MS';">
                        如果你有和宝贝们一起看过迪士尼(Disney)的动画片以及真人电影[ 灰姑娘(Cyderella) ],就一定会对它有着深刻的印象。
                        这首由女主角仙德瑞拉Cyderella演唱的歌曲，它作为整部电影的中心，塑造了灰姑娘对梦想执着追求，永不放弃的精神。
                        相信你也一定希望自己的孩子能够拥有这样的品格吧，现在就让我们来听一下电影中的原声重现吧。
                    </span>
                </p>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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
            <div class="col-xs-10 column">
                <p>Jessie Ware：</p>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-fel.png" class="img-avatar img-rounded"/>
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

        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <p>Lily James：</p>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-fel.png" class="img-avatar img-rounded"/>
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

        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <p>我们看一下歌曲的原谱：</p>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/a-dream-is-a-wish-your-heart-makes.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 60px;" src="/assets/images/class-content/fel/note.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 60px;" src="/assets/images/class-content/fel/note.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/a-dream-is-a-wish-your-heart-makes-2.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-9 column imgs-class" style="top:40px;text-align: left;">
                <p>
                    <span style="color: black;font-family: 'Comic Sans MS';margin-left: 10px;">我们看一下歌词的中英对译：</span>
                </p>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column" style="border-radius: 15px; border: 0.15em solid; border-color: #00a0e9; font-weight: 500; font-size: 16px; text-align: center;">
                <p style="margin-top: 10px;"></p>
                <p style="color: #b62fa8;">A dream is a wish your heart makes</p>
                <p style="color: black;">梦就是你心中的愿望</p>
                <p style="color: #b62fa8;">When you're fast asleep</p>
                <p style="color: black;">当你熟睡时</p>
                <p style="color: #b62fa8;">In dreams you will lose your heartaches</p>
                <p style="color: black;">在梦中你会忘却你的忧伤</p>
                <p style="color: #b62fa8;">Whatever you wish for you keep</p>
                <p style="color: black;">不管你抱著什麼样的愿望</p>
                <p style="color: #b62fa8;">Have faith in your dreams and someday</p>
                <p style="color: black;">对自已的梦要有信心</p>
                <p style="color: #b62fa8;">Your rainbow will come smiling through</p>
                <p style="color: black;">微笑过後彩虹就会出现</p>
                <p style="color: #b62fa8;">No matter how your heart is grieving</p>
                <p style="color: black;">无论你心里有多悲伤</p>
                <p style="color: #b62fa8;">If you keep on believing</p>
                <p style="color: black;">只要你相信</p>
                <p style="color: #b62fa8;">The dream that you wish will come true</p>
                <p style="color: black;">你的梦想愿望就会成真</p>
                <p style="color: #b62fa8;">A dream is a wish your heart makes</p>
                <p style="color: black;">梦就是你心中的愿望</p>
                <p style="color: #b62fa8;">When you're fast asleep</p>
                <p style="color: black;">当你熟睡时</p>
                <p style="color: #b62fa8;">In dreams you will lose your heartaches</p>
                <p style="color: black;">在梦中你会忘却你的忧伤</p>
                <p style="color: #b62fa8;">Whatever you wish for you keep</p>
                <p style="color: black;">不管你抱著什麼样的愿望</p>
                <p style="color: #b62fa8;">Have faith in your dreams and someday</p>
                <p style="color: black;">对自已的梦要有信心</p>
                <p style="color: #b62fa8;">Your rainbow will come smiling through</p>
                <p style="color: black;">微笑过後彩虹就会出现</p>
                <p style="color: #b62fa8;">No matter how your heart is grieving</p>
                <p style="color: black;">无论你心里有多悲伤</p>
                <p style="color: #b62fa8;">If you keep on believing</p>
                <p style="color: black;">只要你相信</p>
                <p style="color: #b62fa8; text-shadow: 2px 2px 0 #b8b8b8; font-size: 18px;">THE DREAM THAT YOU WISH WILL COME TRUE</p>
                <p style="color: black;">你的梦想愿望就会成真</p>

                <img style="width: 320px; margin: 30px 0 8px -4px;" src="/assets/images/class-content/fel/dream-true.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/dream-wish.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>


        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/class-content/fel/ab.png" class="img-avatar img-rounded" style="width: 50px; height: 48px;"/>
            </div>
            <div class="col-xs-9 column" style="top: 10px;">
                <p>
                    <span style="color: black; font-family: 'Comic Sans MS'; font-size: 20px;">单词表(Vocabulary):</span>
                </p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-1 column class-title">
                <p><strong style="color: red; font-weight: 900;">·</strong></p>
            </div>
            <div class="col-xs-2 column class-title" style="font-family: 'Comic Sans MS';">
                <p><strong style="color: red;">Dream</strong></p>
            </div>
            <div class="col-xs-7 column class-title" style="font-family: 'Comic Sans MS';">
                <p style="color: black;">[driːm]</p>
                <p style="color: black;">vi. 梦想；做梦，梦见   n. 梦</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-1 column class-title">
                <p><strong style="color: red; font-weight: 900;">·</strong></p>
            </div>
            <div class="col-xs-2 column class-title" style="font-family: 'Comic Sans MS';">
                <p><strong style="color: red;">Wish</strong></p>
            </div>
            <div class="col-xs-7 column class-title" style="font-family: 'Comic Sans MS';">
                <p style="color: black;">[wɪʃ]</p>
                <p style="color: black;">n. 希望；祝福   vt. 祝愿</p>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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
        <div class="row clearfix" style="margin-top: 60px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 60px;" src="/assets/images/class-content/fel/note.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/heart-aches.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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


        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/what-ev.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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


        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/smil-ing.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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


        <div class="row clearfix" style="margin-top: 30px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 320px;" src="/assets/images/class-content/fel/be-liev-ing.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-3 column">
                <img src="/assets/images/class-content/fel/fu.png" class="img-avatar img-rounded" style="width: 75px; height: 75px;"/>
            </div>
            <div class="col-xs-7 column" style="top: 25px;">
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


        <div class="row clearfix" style="margin-top: 45px; text-align: center;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <p>
                    <span style="color: black;font-family: 微软雅黑;font-size: 15px;"><strong>你学会了吗？ 如果有下节课你想学习的歌曲也可以发给我哦!</strong></span>
                </p>
                <p>
                    <span style="color: black;font-family: 微软雅黑;font-size: 15px;"><strong>See you next time!</strong></span>
                </p>
            </div>
            <div class="col-xs-1 column"></div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column imgs-class">
                <img style="width: 80px;" src="/assets/images/class-content/fel/bye.png"/>
            </div>
            <div class="col-xs-1 column"></div>
        </div>


    </div>
@stop
