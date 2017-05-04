<!DOCTYPE html>
<html>
<head>
    <title>艺同六艺 - 在线课程</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- why begin: 引入评论插件的css，在bootstrap的css之前引入 -->
    <link rel="stylesheet" href="/assets/css/semantic.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/zyComment.css" type="text/css" />
    <!-- why end: 引入评论插件的css，在bootstrap的css之前引入 -->

    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/class-demo.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/wechat-audio.css" type="text/css" />
</head>

<body>
{{--防止微信之外的浏览器打开--}}
{{--<script type="text/javascript" src="/assets/js/disableAccessBeyondWeChat.js"></script>--}}

<audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc1"></audio>
<audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc2"></audio>
<audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc3"></audio>
<audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc4"></audio>
<audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc5"></audio>
<audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc6"></audio>

{{--<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>--}}
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
{{--<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>


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
        <div class="col-xs-10 column class-title">
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
            <img src="/assets/images/avatar.jpeg" class="img-avatar img-rounded"/>
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
        <div class="col-xs-10 column class-title">
            <p>“The <strong class="text-success">pencil</strong> is blunt.”</p>
            <p>"<strong class="text-success">铅笔</strong>秃了。"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/avatar.jpeg" class="img-avatar img-rounded"/>
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
        <div class="col-xs-10 column class-title">
            <p>“You nearly poked me in the eye with your <strong class="text-success">pencil</strong>!”</p>
            <p>"你的<strong class="text-success">铅笔</strong>差点戳了我的眼睛！"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/avatar.jpeg" class="img-avatar img-rounded"/>
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
        <div class="col-xs-10 column class-title">
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
            <img src="/assets/images/avatar.jpeg" class="img-avatar img-rounded"/>
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
        <div class="col-xs-10 column class-title">
            <p>“Is this your <strong class="text-success">eraser</strong> ?”</p>
            <p>"是你的<strong class="text-success">橡皮</strong>？"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/avatar.jpeg" class="img-avatar img-rounded"/>
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
        <div class="col-xs-10 column class-title">
            <p>“I scrubbed them out with the <strong class="text-success">eraser</strong>!”</p>
            <p>"我用<strong class="text-success">铅笔</strong>把它们完全擦掉了！"</p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-xs-1 column"></div>
        <div class="col-xs-2 column">
            <img src="/assets/images/avatar.jpeg" class="img-avatar img-rounded"/>
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


<div class="container" style="margin-top: 50px;">
    <div>
        <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-xs-1 column"></div>
                <div class="col-xs-10 column"><hr></div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 column" style="text-align: center;">
                    <p class="text-danger"><strong>关注我们:</strong></p>
                </div>
            </div>
            <div class="col-xs-12 column imgs-class" >
                <img src="/Wechat.jpg" class="img-rounded" width="188px;"/>
            </div>
        </div>
    </div>

</div>


{{--评论区域：--}}
<div class="container" style="margin: 80px 0 150px 0;">
    <!-- why begin: 把这段插入到页面最下面就好 -->
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div id="articleComment"></div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="评论" id="commentInput" aria-describedby="submitComment">
                <span class="input-group-addon btn-default" id="submitComment">提交</span>
            </div>
        </div>
    </div>
    <!-- why end: 把这段插入到页面最下面就好 -->
</div>


<!-- why begin: 评论插件代码 -->
<script type="text/javascript" src="/assets/js/zyComment.js"></script>
<script type="text/javascript" src="/assets/js/comment.js"></script>
<!-- why end: 评论插件代码 -->

{{--仿微信语音样式和动效--}}
<script type="text/javascript" src="/assets/js/wechat-audio.js"></script>

<script type="text/javascript">
    $(function(){
        InitAllAudioCell();
    });
</script>
</body>
</html>
