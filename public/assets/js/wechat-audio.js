/**
 * Created by lyx on 2017/5/4.
 */

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
