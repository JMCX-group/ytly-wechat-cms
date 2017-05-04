<!DOCTYPE html>
<html>
    <head>
        <title></title>
        {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

        <!-- why begin: 引入评论插件的css，在bootstrap的css之前引入 -->
        <link rel="stylesheet" href="/assets/css/semantic.css" type="text/css" />
        <link rel="stylesheet" href="/assets/css/zyComment.css" type="text/css" />
        <!-- why end: 引入评论插件的css，在bootstrap的css之前引入 -->

        <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <style type="text/css">
        body {
            font-family: 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, 'PingFang SC', 'Hiragino Sans GB', sans-serif;
            color: #65696F;
            background: transparent url('/assets/images/logo-background.png');
            overflow-x: hidden;
        }

        .class-row{
            padding: 20px 0;
        }
        .class-title{
            font-size: 16px;
        }
        .imgs-class {
            text-align: center;
            padding: 10px;
        }
        .imgs-class img {
            max-width: 360px;
        }
        .img-avatar{
            width: 45px;
            height: 45px;
        }
    </style>

    <style type="text/css">
        /* audio_play_cell 用来控制播放条的背景颜色和高度 */
        .audio_play_cell {
            background-color: #cff4ad;
            line-height: 45px;
        }

        .icon_audio_playing {
            background: transparent url('/wechat/audio/images/audio_play_icon_playing.png') no-repeat 0 0;
            width: 18px;
            height: 25px;
            vertical-align: middle;
            display: inline-block;
            -webkit-background-size: 54px 25px;
            background-size: 54px 25px;
            -webkit-animation: audio_playing 1s infinite;
            background-position: 0px center;
            display: none;
        }

        .icon_audio_bkg {
            background: transparent url('/wechat/audio/images/audio_play_icon_bkg.png') no-repeat 0 0;

            width: 18px;
            height: 25px;
            vertical-align: middle;
            display: inline-block;
            -webkit-background-size: 54px 25px;
            background-size: 54px 25px;
            background-position: -36px center;
        }

        audio {
            display: none;
        }

        @-webkit-keyframes audio_playing {
            30% {
                background-position: 0px center;
            }
            31% {
                background-position: -18px center;
            }
            61% {
                background-position: -18px center;
            }
            61.5% {
                background-position: -36px center;
            }
            100% {
                background-position: -36px center;
            }
        }
    </style>


    <body>
    <script type="text/javascript">
        // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
        var useragent = navigator.userAgent;
        if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
            // 这里警告框会阻塞当前页面继续加载
            alert('已禁止本次访问：您必须使用微信内置浏览器访问本页面！');
            // 以下代码是用javascript强行关闭当前页面
            var opened = window.open('about:blank', '_self');
            opened.opener = null;
            opened.close();
        }
    </script>

    <audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc1"></audio>
    <audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc2"></audio>
    <audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc3"></audio>
    <audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc4"></audio>
    <audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc5"></audio>
    <audio src="http://warpcgd.github.io/webchataudio/src/sound/sound.mp3" controls="controls" id="audioSrc6"></audio>

    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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
                <img src="/imgs/pencil.png" class="img-avatar img-rounded"/>
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
                <img src="/imgs/pencil.png" class="img-avatar img-rounded"/>
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
                <img src="/imgs/pencil.png" class="img-avatar img-rounded"/>
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
                <img src="/imgs/eraser.png" class="img-avatar img-rounded"/>
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
                <img src="/imgs/eraser.png" class="img-avatar img-rounded"/>
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
                <img src="/imgs/eraser.png" class="img-avatar img-rounded"/>
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


    <!-- why begin: 引入jQuery和bootstrap的js文件 -->
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- why end: 引入jQuery和bootstrap的js文件 -->


    {{--<script src="/wechat/audio/js/weixinAudio.js" type="text/javascript" charset="utf-8"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$('.wechat-audio').weixinAudio({--}}
            {{--src: '/wechat/audio/sound/sound.mp3'--}}
        {{--});--}}
    {{--</script>--}}


    <!-- why begin: 评论插件代码 -->
    <script type="text/javascript" src="/assets/js/zyComment.js"></script>
    <script type="text/javascript">

        // 对Date的扩展，将 Date 转化为指定格式的String
        // 月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符，
        // 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)
        // 例子：
        // (new Date()).Format("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423
        // (new Date()).Format("yyyy-M-d h:m:s.S")      ==> 2006-7-2 8:9:4.18
        Date.prototype.fmt = function(fmt)
        { //author: meizz
            var o = {
                "M+" : this.getMonth()+1,                 //月份
                "d+" : this.getDate(),                    //日
                "h+" : this.getHours(),                   //小时
                "m+" : this.getMinutes(),                 //分
                "s+" : this.getSeconds(),                 //秒
                "q+" : Math.floor((this.getMonth()+3)/3), //季度
                "S"  : this.getMilliseconds()             //毫秒
            };
            if(/(y+)/.test(fmt))
                fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
            for(var k in o)
                if(new RegExp("("+ k +")").test(fmt))
                    fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
            return fmt;
        };

        //这个是评论插件的初始化，里面那个articleComment是评论区域的id
        $("#articleComment").zyComment({
            "callback":function(comment){
                // 添加新的评论，commentInput是输入框的id
                var $commentInput = $("#commentInput");
                var commentText = $commentInput.val();
                $commentInput.val("");
                if("" == commentText.trim()) {
                    return;
                }
                console.log($("#commentItems").children().length);
                $("#articleComment").zyComment("addNewComment",{"id": 0, "name":"昵称", "content":commentText, "time": new Date().fmt("yyyy-MM-dd")});
            }
        });
    </script>
    <!-- why end: 评论插件代码 -->

    <script>
        $(function(){
           InitAllAudioCell();
        });

        // why begin: 这个函数是初始化播放工具的，参数里那些可以不传，但是参数位置不能错
        function InitAllAudioCell(playStart, playFinished, manuallyStopped) {
            $("div.audio_play_cell").each(function () {
                var $this = $(this);
                var $audio = $($this.attr("data-target"));
                var audio = $audio.get(0);
                $this.data("target_audio", $audio);

                $this.on("click", function(){
                    if(audio.paused){
                        audio.play();
                    } else {
                        audio.pause();
                        //初始化音频文件
                        audio.currentTime = 0;
                    }
                });

                function loopGetAudioLength() {
                    var sec = parseFloat(audio.duration).toFixed(1);
                    if(!isNaN(sec)) {
                        $this.find(".audio_seconds").text(sec+"s");
                    } else {
                        setTimeout(function() {
                            loopGetAudioLength()
                        }, 100);
                    }
                }

                setTimeout(
                    function(){
                        loopGetAudioLength()
                    },100);

                $audio.on("ended", function () {
                    console.log("ended");
                    $this.find("span.icon_audio_bkg").css({"display":"inline-block"});
                    $this.find("span.icon_audio_playing").css({"display":"none"});
                    if("function" == typeof playFinished) {
                        playFinished($this, $audio);
                    }
                }).on("pause", function () {

                    $this.find("span.icon_audio_playing").css({"display":"none"});
                    $this.find("span.icon_audio_bkg").css({"display":"inline-block"});

                    if("function" == typeof manuallyStopped) {
                        manuallyStopped($this, $audio);
                    }
                }).on("play", function () {
                    $this.find("span.icon_audio_bkg").css({"display":"none"});
                    $this.find("span.icon_audio_playing").css({"display":"inline-block"});

                    $("audio").each(function () {
                        if(this == audio) {
                            return;
                        }
                        this.pause();
                        this.currentTime = 0;
                        console.log($(this).text())
                    });

                    if("function" == typeof playStart) {
                        playStart($this, $audio);
                    }
                });
            });
        }
        // why begin: 这个函数是初始化播放工具的，参数里那些可以不传，但是参数位置不能错
    </script>
    </body>
</html>
