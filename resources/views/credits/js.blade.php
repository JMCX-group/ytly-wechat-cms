<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/4/13
 * Time: 下午1:58
 */
?>

@section('script')
    <script type="text/javascript">
        var timetables = {!! $timetables !!};
        var peoples = {!! $peoples !!};
        var $profession = $("#profession");
        var $course = $("#course");

        /**
         * 专业改变后修改课程
         */
        $profession.change(function () {
            changeCourse();
            changePeoples();
        });

        $course.change(function () {
            changePeoples();
        });

        /**
         * 修改课程
         */
        function changeCourse() {
            var professionVal = $profession.val();
            $course.empty();

            for (var timetableKey in timetables) {
                if (timetables[timetableKey]["profession"] == professionVal) {
                    $course.append("<option value='" + timetables[timetableKey]["course"] + "'>" + timetables[timetableKey]["course"] + "</option>");
                }
            }
        }

        /**
         * 刷新学生名单
         */
        function changePeoples(){
            var $peopleList = $("#people-list");
            var courseVal = $course.val();
            var professionVal = $profession.val();

            $peopleList.empty();

            for(var peopleKey in peoples) {
                if(peoples[peopleKey]["profession"] == professionVal){
                    $peopleList.append(
                        '<div class="form-group">' +
                        '<div class="col-sm-1"></div>' +
                        '<div class="col-sm-2" style="text-align:right;">' +
                        '<img src=' + peoples[peopleKey]["head_img_url"] + ' style="width: 45px;">' +
                        '<label for="fraction" class="control-label container" style="text-align:right; padding-right: 0;">' + peoples[peopleKey]["name"] + '</label>' +
                        '</div>' +
                        '<div class="col-sm-6">' +
                        '<input type="text" class="form-control" name="student-' + peoples[peopleKey]["id"] + '" placeholder="课程学分，未输入的不计分" value="">' +
                        '</div>' +
                        '</div>'
                    );
                }
            }
        }
    </script>
@stop