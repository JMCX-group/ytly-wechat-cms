/**
 * Created by lyx on 2017/5/4.
 */

// 对Date的扩展，将 Date 转化为指定格式的String
// 月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符，
// 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字)
// 例子：
// (new Date()).Format("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423
// (new Date()).Format("yyyy-M-d h:m:s.S")      ==> 2006-7-2 8:9:4.18
Date.prototype.fmt = function(fmt) { //author: meizz
    var o = {
        "M+": this.getMonth() + 1,                 //月份
        "d+": this.getDate(),                    //日
        "h+": this.getHours(),                   //小时
        "m+": this.getMinutes(),                 //分
        "s+": this.getSeconds(),                 //秒
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度
        "S": this.getMilliseconds()             //毫秒
    };
    if (/(y+)/.test(fmt))
        fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt))
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
};

/**
 * 这个是评论插件的初始化，里面那个articleComment是评论区域的id
 */
$("#articleComment").zyComment({
    "callback": function (comment) {
        // 添加新的评论，commentInput是输入框的id
        var $commentInput = $("#commentInput");
        var commentText = $commentInput.val();
        var commentName = $("#comment-name-val").val();
        var commentAvatar = $("#comment-avatar-val").val();
        $commentInput.val("");

        if ("" == commentText.trim()) {
            return;
        }

        console.log($("#commentItems").children().length);

        if (commentName === null || commentName === undefined || commentName === '') {
            commentName = '游客';
            commentAvatar = '/assets/images/foot.png';
        }

        $("#articleComment").zyComment("addNewComment", {
            "id": 0,
            "avatar": commentAvatar,
            "name": commentName,
            "content": commentText,
            "time": new Date().fmt("yyyy-MM-dd")
        });
    }
});
