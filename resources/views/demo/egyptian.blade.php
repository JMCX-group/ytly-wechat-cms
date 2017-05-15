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
                <div style="position: absolute; text-align: center; width: 394px; top: 40px; font-size: 24px;">
                    <p>
                        <span><strong style="color: blue;">How</strong> </span>
                        <span><strong style="color: black;">to</strong> </span>
                        <span><strong style="color: red">Write</strong> </span>
                        <span><strong style="color: black">and</strong> </span>
                        <span><strong style="color: purple">draw</strong> </span>
                    </p>
                    <p>
                        <span><strong style="color: black;">number</strong> </span>
                        <span><strong style="color: green;">like</strong> </span>
                        <span><strong style="color: black">an</strong> </span>
                        <span><strong style="color: red">egyptian</strong> </span>
                    </p>
                </div>
                <img src="/assets/images/class-content/egyptian/banner.png"/>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-12 column imgs-class">
                <div class="col-xs-1 column"></div>
                <div class="arrow_box col-xs-7 column ">
                    <p style="color: black;">
                        "What do drawings of ropes, fingers, and flowers have to do with math?
                        Keep on reading to learn how the ancient Egyptians used these and many other
                        <strong>hieroglyphs[haɪə'rəglɪfs]</strong>
                        to count numbers!”
                    </p>
                </div>
                <div class="col-xs-4 column">
                    <img src="/assets/images/class-content/egyptian/little-man.png" width="90px"/>
                </div>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-1 column class-title">
                <p><strong class="text-danger">·</strong></p>
            </div>
            <div class="col-xs-9 column class-title">
                <p><strong class="text-danger">hieroglyphs</strong>
                    <small>[haɪə'rəglɪfs] 象形字</small>
                </p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        {{--######--}}
        {{--Part 1--}}
        {{--######--}}
        <div class="row clearfix" style="margin-top: 60px">
            <div class="col-xs-12 column imgs-class">
                <div style="position: absolute; text-align: center; width: 394px; top: 15px; font-size: 23px;">
                    <p>
                        <span><strong style="color: red;">Part 1</strong> </span>
                        <span><strong style="color: purple">The Birth of Arithmetic</strong> </span>
                    </p>
                </div>
                <img src="/assets/images/class-content/egyptian/font-bg.png"/>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>For some reason around 30,000 years ago people started making tiny notches in </span>
                        <span style="color: cornflowerblue;">bones</span>
                        <span>. Researchers who found these </span>
                        <span style="color: cornflowerblue;">bones</span>
                        <span> have </span>
                        <span style="background:yellow;">speculated[ˈspekjuleɪtid]</span>
                        <span> that the marks carved in them were probably used to keep track of things like the number of </span>
                        <span style="color: cornflowerblue;">sheep</span>
                        <span> in a field or the number of days since the last </span>
                        <span style="background:yellow;">harvest[ˈha:vɪst]</span>
                        <span>. In other words, these so called “</span>
                        <span style="color:red; background:yellow;">tally[ˈtæli]-bones</span>
                        <span>” represent the origin of counting.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> speculated [ˈspekjuleɪtid] 思索,猜测,推测</p>
                <p><strong class="text-danger">·</strong> harvest [ˈha:vɪst] 收割;收成;收获季节</p>
                <p><strong class="text-danger">·</strong> tally [ˈtæli] 计数器;标签;记账</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>But this system for </span>
                        <span style="background:yellow;">keeping track[træk] of</span>
                        <span> numbers isn’t so great (which is why we aren’t all using it!). Why do I say that? Well, imagine you’re an ancient </span>
                        <span><u>tally-bone</u></span>
                        <span> carver and your job is to make one </span>
                        <span style="background:yellow;">notch[nɒtʃ]</span>
                        <span> on your bone for every full moon since the last </span>
                        <span><u>harvest</u></span>
                        <span>. After four full moons, your bone has four notches:</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <img style="width: 100px;" src="/assets/images/class-content/egyptian/bone-1.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> keeping track [træk] of 记录</p>
                <p><strong class="text-danger">·</strong> notch [nɒtʃ] 刻痕</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>Which, perhaps, means that it’s time to plant your crops again and </span>
                        <span style="background:yellow;">restart[ri:'sta:t]</span>
                        <span> your tallying. For this purpose the system seems to work pretty well. But what if your job was to keep track of the number of weeks that have passed instead of the number of months? After those same four months, your </span>
                        <span><u>tally-bone</u></span>
                        <span> would </span>
                        <span style="background:yellow;">contain [kən'teɪn]</span>
                        <span> a lot of notches—almost 20 of them:</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <img style="width: 100px;" src="/assets/images/class-content/egyptian/bone-2.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> restart [ri:'sta:t] 重新开始</p>
                <p><strong class="text-danger">·</strong> contain [kən'tein] 包含</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>All of those notches means that it’s a lot </span>
                        <span style="background:yellow;">tougher[tʌfɜ]</span>
                        <span> to tell at a glance how long it’s been since the </span>
                        <span><u>harvest</u></span>
                        <span>.</span>
                    </p>
                    <p>
                        <span style="background:yellow;">Even worse['iːv(ə)n,wə:s]</span>
                        <span>, what if your job is actually to keep track of the number of days that have passed. Then your </span>
                        <span><u>tally-bone</u></span>
                        <span> would contain over 100 notches:</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <span>
                    <img style="width: 140px;" src="/assets/images/class-content/egyptian/bone-3.png"/>
                </span>
                <span>
                    <img style="width: 140px;" src="/assets/images/class-content/egyptian/bone-3.png"/>
                </span>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> tough [tʌf] 重新开始 <small>-tougher [tʌfɜ](比较级)</small></p>
                <p><strong class="text-danger">·</strong> even worse ['iːv(ə)n,wə:s] 更糟的是</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>What a mess<strong style="color: black;"> ! </strong></span>
                        <span style="background:yellow;">Even if['iːv(ə)n,ɪf]</span>
                        <span> you don’t run out of room on your </span>
                        <span><u>tally-bone</u></span>
                        <span>, every time you want to know how many days have passed you have to start from the beginning and count EACH and EVERY mark......That’s obviously not too smart…which led people to start </span>
                        <span style="background:yellow;">looking for['lʊkɪŋ,fə(r);]</span>
                        <span> a better way to do things.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> Even if ['i:v(ə)n,if] 甚至</p>
                <p><strong class="text-danger">·</strong> looking for ['lʊkiŋ,fə(r);] 寻找</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        {{--######--}}
        {{--Part 2--}}
        {{--######--}}
        <div class="row clearfix" style="margin-top: 60px">
            <div class="col-xs-12 column imgs-class">
                <div style="position: absolute; text-align: center; width: 394px; top: 15px; font-size: 23px;">
                    <p>
                        <span><strong style="color: red;">Part 2</strong> </span>
                        <span><strong style="color: purple">Egyptian Numbers</strong> </span>
                    </p>
                </div>
                <img src="/assets/images/class-content/egyptian/font-bg.png"/>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>About </span>
                        <span style="color: green;">5,000</span>
                        <span> years ago the ancient Egyptians developed a </span>
                        <span style="background:yellow;">hieroglyphic[haɪrə'glɪfɪk]</span>
                        <span> system that was definitely an improvement. As we’ll soon see and </span>
                        <span style="background:yellow;">appreciate[ə'pri:ʃɪeɪt;-sɪ-]</span>
                        <span>, the key to this system is the idea that it’s much more </span>
                        <span style="background:yellow;">efficient[ɪ'fɪʃ(ə)nt]</span>
                        <span> to use many symbols to represent numbers rather than just the single symbol used by the </span>
                        <span><u>tally-bone</u></span>
                        <span> carvers. The first five symbols in the ancient Egyptian numeral system are:</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <img style="width: 300px;" src="/assets/images/class-content/egyptian/hieroglyphic.png"/>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> hieroglyphic [hairə'glifik] 象形文字</p>
                <p><strong class="text-danger">·</strong> appreciate [ə'pri:ʃieit;-si-] 欣赏；感激</p>
                <p><strong class="text-danger">·</strong> efficient [i'fiʃ(ə)nt] 有效率的</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        <div class="row clearfix" style="margin-top: 45px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column">
                <div style="font-family:'Comic Sans MS',微软雅黑; font-size: 16px; text-align: left;">
                    <p>
                        <span>Notice that the symbol for the number 1 is basically a notch—exactly like the one our </span>
                        <span><u>tally-bone</u></span>
                        <span> carving friends used. And, not </span>
                        <span style="background:yellow;">coincidentally[kəu,insi'dentli]</span>
                        <span>, it looks a lot like our numeral “1”. But that’s where the </span>
                        <span style="background:yellow;">similarity[sɪmə'lærətɪ]</span>
                        <span> to the tally-bone system ends since the Egyptians also had symbols for the numbers </span>
                        <span style="background:#6efbfd">10</span>
                        <span> (shaped like a </span>
                        <span style="background:yellow;">yoke [jəʊk]</span>
                        <span> used to plow fields), </span>
                        <span style="background:#6efbfd">100</span>
                        <span> (a twisted length of </span>
                        <span style="background:yellow;">rope[rəʊp]</span>
                        <span>), </span>
                        <span style="background:#6efbfd">1000</span>
                        <span> (a rather cheerful looking flower), 10,000 (a finger), 100,000 (a frog), and 1,000,000 (a happy human with arms raised to the sky). But what about the numbers </span>
                        <span style="background:#6efbfd">2</span>
                        <span>,</span>
                        <span style="background:#6efbfd">3</span>
                        <span>, and everything else that doesn’t have a unique hieroglyph?</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 column imgs-class">
                <span>
                    <img style="width: 90px;" src="/assets/images/class-content/egyptian/num-2.png"/>
                </span>
                <span>
                    <img style="width: 90px;" src="/assets/images/class-content/egyptian/num-3.png"/>
                </span>
                <span>
                    <img style="width: 90px;" src="/assets/images/class-content/egyptian/question-mark.png"/>
                </span>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-10 column class-title">
                <p><strong class="text-danger">·</strong> coincidentally [kəu,insi'dentli] 巧合地</p>
                <p><strong class="text-danger">·</strong> similarity [simə'lærəti] 类似; 相似点</p>
                <p><strong class="text-danger">·</strong> yoke [jəʊk] 牛轭</p>
                <p><strong class="text-danger">·</strong> rope [rəʊp] 绳索</p>
            </div>
        </div>
        <div class="row clearfix" style="margin-top: 15px;">
            <div class="col-xs-1 column"></div>
            <div class="col-xs-2 column">
                <img src="/assets/images/audio-avatar/avatar-egyptian.png" class="img-avatar img-rounded"/>
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


        <div class="row clearfix" style="margin-top: 60px;">
            <div class="col-xs-12 column" style="text-align: center; font-size: 24px; font-family:'Comic Sans MS',微软雅黑;">
                <p class="text-muted">
                    SEE YOU NEXT TIME !
                </p>
            </div>
        </div>


        <div class="row clearfix" style="margin-top: 60px;">
            <div class="col-xs-12 column imgs-class">
                <img style="width: 300px;" src="/assets/images/class-content/egyptian/pyramid.png"/>
            </div>
        </div>


    </div>
@stop
