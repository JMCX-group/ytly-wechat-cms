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
    <title>音维时间课程下载列表</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- why begin: 引入评论插件的css，在bootstrap的css之前引入 -->
    <link rel="stylesheet" href="{{asset('/assets/css/semantic.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/css/zyComment.css')}}"/>
    <!-- why end: 引入评论插件的css，在bootstrap的css之前引入 -->

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" >
    {{--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css" >--}}

    {{--防止微信之外的浏览器打开--}}
    {{--<script type="text/javascript" src="/assets/js/disableAccessBeyondWeChat.js"></script>--}}

    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    {{--<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>--}}

    <style>
        /* DIV居中 */
        .div-centered {
            width: 800px;
            height: 600px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -300px 0 0 -400px;
        }
    </style>
</head>
<body>
    @yield("content")
    @yield("script")
</body>
</html>
