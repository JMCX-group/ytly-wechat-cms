<?php
/**
 * Created by PhpStorm.
 * User: mvp_xuan
 * Date: 2017-5-4
 * Time: 19:22
 */
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>艺同六艺 - 在线课程</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- why begin: 引入评论插件的css，在bootstrap的css之前引入 -->
    <link rel="stylesheet" href="{{asset('/assets/css/semantic.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/css/zyComment.css')}}"/>
    <!-- why end: 引入评论插件的css，在bootstrap的css之前引入 -->

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" >
    {{--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css" >--}}

    <link rel="stylesheet" href="{{asset('/assets/css/wechat-audio.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/css/class-demo.css')}}"/>


    {{--防止微信之外的浏览器打开--}}
    {{--<script type="text/javascript" src="/assets/js/disableAccessBeyondWeChat.js"></script>--}}

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    {{--<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>--}}

    <!-- why begin: 评论插件代码 -->
    <script type="text/javascript" src="/assets/js/zyComment.js"></script>
    <!-- why end: 评论插件代码 -->

    {{--仿微信语音样式和动效--}}
    <script type="text/javascript" src="/assets/js/wechat-audio.js"></script>
</head>
<body>
    @yield("content")

    @include('layouts.wechat-qrcode')
    @include('layouts.comment')
<script type="text/javascript" src="/assets/js/comment.js"></script>
</body>
</html>
