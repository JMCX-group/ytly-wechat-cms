<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 2017/10/26
 * Time: 11:18
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>艺同六艺</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <style>
          /* DIV居中 */
          .div-centered {
              width: 800px;
              height: 400px;
              position: absolute;
              left: 50%;
              top: 50%;
              margin: -200px 0 0 -400px;
          }
          .input-phone,
          .btn-pull {
              width: 360px;
              margin:0 auto;
          }
      </style>
  </head>
  <body>
    <div id="app">
        <div class="container">
            <div class="div-centered">

                <div class="jumbotron">
                    <h4 class="text-center" style="margin-bottom: 40px">请输入您的手机号，获取可以下载的文件列表</h4>

                    <form class="form-horizontal" action="{{URL::to('dl/list')}}" method="post" enctype="multipart/form-data">
                        <div class="box-header with-border">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>
                        <div class="box-body">
                            <div class="form-group text-center">
                                <input class="form-control text-center input-phone" id="phone" name="phone"  placeholder="输入手机号">
                            </div>
                        </div>
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-success text-center btn-pull">确 定</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
  </body>
</html>
