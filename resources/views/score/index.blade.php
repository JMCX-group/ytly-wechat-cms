<?php
/**
 * Created by JMCX - WHY
 * Date: 2017/4/9
 */
//
//$course_name_key = "course_name";
//$total_score_key = "total_score";
//$detail_scores_key = "detail_score";
//
//$score = array(
//    array(
//        $course_name_key=>"钢琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    ),
//    array(
//        $course_name_key=>"小提琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    ),
//    array(
//        $course_name_key=>"手风琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    ),
//    array(
//        $course_name_key=>"竖琴",
//        $total_score_key=>150,
//        $detail_scores_key=>array(
//            10,20,30,40,50
//        )
//    )
//);
//
//$user_info = array(
//    "user_name"=>"高小琴",
//    "course_name"=>"器乐",
//    "user_headimg"=>"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo_top_ca79a146.png"
//);

?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>艺同六艺</title>
    <link rel="stylesheet" href="css/lib/core.css">
    <style>
        body {
            background-color: #e3e3e3;
        }

        .score-list{
            border-radius: 6px;
        }

        .score-list > .cf-row {
            /*border-bottom: 1px solid rgba(240,240,240,0.4);*/
            color: #666;
        }

        .score-list > .cf-row:last-child {
            border-bottom: 0;
        }

        .score-list > .cf-row.page-list-title {
            color: #000;
        }

        .score-list .page-class-title {
            background-color: rgba(0,0,0,0.1);
        }

        .page-score-number {
            color: #ff3c00;
        }
    </style>
</head>
<body class="cf-invisible">

<div class="cf-wrap-no-bottom" data-cf-layout='{
    "minHeight": 500
}'>
    <!-- some backgrounds -->
    <img src="img/bkg.jpg" class="cf-img-bkg">
    <img src="img/logo_bkg.png" data-cf-layout='{
            "position": "absolute",
            "top": 0,
            "left": "50%",
            "width": 296,
            "marginTop": 74,
            "marginLeft": -148
        }'>

    <!-- logo -->
    <div class="cf-row" data-cf-layout='{
        "marginTop": 40,
        "textAlign": "center",
        "marginBottom": 36,
        "fontSize": 0,
        "height": 90
    }'><img src="img/logo.png" data-cf-layout='{"width":90}'>
    </div>

    <!-- logo text -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 16,
        "fontSize": 0,
        "height": 41
    }'>
        <img src="img/logo_text.png" data-cf-layout='{"height":41}'>
    </div>

    <!-- gray divider -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 12,
        "fontSize": 0,
        "height": 2
    }'>
        <span data-cf-layout='{
            "display": "inline-block",
            "width":136,
            "height":2,
            "background": "#dcdcdc"
        }'></span>
    </div>

    <!-- name -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 12,
        "fontSize": 0,
        "height": 32,
        "lineHeight": 32
    }'>
        <span data-cf-layout='{
           "fontSize": 32,
           "color": "#666666"
        }'><?php echo $user_info["user_name"] ?></span>
    </div>

    <!-- page type -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 20,
        "fontSize": 0,
        "height": 40,
        "lineHeight": 40
    }'>
        <img src="img/page_typ_bkg.png" data-cf-layout='{
            "position": "absolute",
            "width": 120,
            "top": 0,
            "left": "50%",
            "marginLeft": -60
        }'>
        <span data-cf-layout='{
            "position":"relative",
            "display": "inline-block",
            "width":120,
            "height":40,
           "fontSize": 28,
           "color": "#000",
           "z-index": 1
        }'>学分表</span>
    </div>

    <!-- head image -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 20,
        "fontSize": 0,
        "height": 130,
        "lineHeight": 32,
        "z-index": 1
    }'>
        <img src="<?php echo $user_info["user_headimg"] ?>" style="border-radius: 50%" data-cf-layout='{
            "width": 130,
            "height": 130,
            "border": 0,
            "background": "#dcdcdc"
        }'>
    </div>

    <!-- professional title -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 10,
        "fontSize": 0,
        "height": 32,
        "lineHeight": 32
    }'>
        <span data-cf-layout='{
            "display": "inline-block",
            "fontSize": 32,
            "color": "#ff3c00"
        }'><?php echo $user_info["course_name"] ?></span>
    </div>

    <!-- divider -->
    <div class="cf-row" data-cf-layout='{
        "textAlign": "center",
        "marginBottom": 10,
        "fontSize": 0,
        "height": 8,
        "lineHeight": 8
    }'>
        <div data-cf-layout='{
            "position": "absolute",
            "width": 544,
            "height": 2,
            "top": 2,
            "left": "50%",
            "marginLeft": -272,
            "background": "rgba(255, 60, 0, 0.2)"
        }'></div>
        <span data-cf-layout='{
            "position": "relative",
            "display": "inline-block",
            "color": "#ff3c00",
            "width": 24,
            "height": 8,
            "marginTop": -4,
            "background": "#ff3c00"
        }'>&nbsp;</span>
    </div>

    <!-- class score list   -->
    <div class="cf-row" data-cf-layout='{
        "marginTop": -130,
        "paddingLeft": 55,
        "paddingRight": 55
    }'>
        <div class="cf-row score-list" data-cf-layout='{
            "background": "rgba(0, 0, 0, 0.1)",
            "minHeight": 140,
            "textAlign": "center",
            "paddingTop": 120,
            "marginBottom": 70,
            "fontSize": 30,
            "paddingLeft": 48,
            "paddingRight": 48,
            "paddingBottom": 35,
            "lineHeight": 70
        }'>

            <div class="cf-row page-list-title" data-cf-layout='{"height": 70}'>
                <div class="cf-col-6x">课程</div>
                <div class="cf-col-6x">总分</div>
            </div>
            <?php foreach($score as $info){ ?>

            <div class="cf-row">
                <div class="cf-row page-class-title" data-cf-layout='{"height": 70}'>
                    <div class="cf-col-6x"><?php echo $info["course_name"] ?></div>
                    <div class="cf-col-6x"><?php echo $info["total_score"] ?></div>
                </div>

                <div class="cf-row page-score-detail-list" data-cf-layout='{
                    "fontSize": 26
                }'>
                    <?php
                    $score_idx = 1;
                    foreach($info["detail_score"] as $score_info) {
                    ?>

                    <div class="cf-row" data-cf-layout='{"height": 70}'>
                        <div class="cf-col-6x">第 <span class="page-score-number"><?php echo "$score_idx" ?></span> 课</div>
                        <div class="cf-col-6x"><?php echo "$score_info" ?>分</div>
                    </div>

                    <?php $score_idx ++; } ?>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>


<script src="js/lib/jquery-3.2.0.min.js"></script>
<script src="js/lib/json2/json2.js"></script>
<script src="js/lib/core.js"></script>
<script src="js/score.js"></script>


<script>
    $(function() {
        g_jq_dom = $.extend({}, g_jq_dom, {
            $page_loading:$("#page-loading")
        });

        var margin_top = g_var.wnd_height - g_jq_dom.$page_loading.height();
        margin_top = margin_top / 2;

        g_jq_dom.$page_loading.css({"margin-top":margin_top})

    });

</script>

</body>
</html>