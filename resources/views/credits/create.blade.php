<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/3/30
 * Time: 下午3:32
 */
?>

@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <form class="form-horizontal" action="{{URL::to('credit')}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="box-body">
                        <ul class="breadcrumb">
                            <li><a href="#">选择专业及课程</a> <span class="divider"></span></li>
                        </ul>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">专业名称</label>
                            <div class="col-sm-6">
                                <select id="profession" class="form-control select2" name="profession">
                                    <option value="声乐-古典">声乐-古典</option>
                                    <option value="声乐-流行">声乐-流行</option>

                                    <option value="弦乐-小提琴">弦乐-小提琴</option>
                                    <option value="弦乐-大提琴">弦乐-大提琴</option>
                                    <option value="弦乐-吉他">弦乐-吉他</option>

                                    <option value="管乐-单簧管">管乐-单簧管</option>
                                    <option value="管乐-长笛">管乐-长笛</option>
                                    <option value="管乐-萨克斯">管乐-萨克斯</option>
                                    <option value="管乐-小号">管乐-小号</option>
                                </select>
                                @include('layouts.message.tips',['field'=>'profession'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">课程名称</label>
                            <div class="col-sm-6">
                                <select id="course" class="form-control select2" name="course">
                                    @foreach($timetables as $timetable)
                                        @if($timetable->profession == '声乐-古典')
                                            <option value="{{$timetable->course}}">{{$timetable->course}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @include('layouts.message.tips',['field'=>'course'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="num" class="col-sm-3 control-label">课时</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="num" placeholder="第几课时" value="">
                                @include('layouts.message.tips',['field'=>'num'])
                            </div>
                        </div>

                        <ul class="breadcrumb">
                            <li><a href="#">学员列表</a> <span class="divider"></span></li>
                        </ul>
                        <div id="people-list">
                            @foreach($peoples as $people)
                                @if($people->profession == '声乐-古典')
                                    <div class="form-group">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-2" style="text-align:right;">
                                            <img src="{{$people->head_img_url}}" style="width: 45px;">
                                            <label for="fraction" class="control-label container" style="text-align:right; padding-right: 0;">{{$people->name}}</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="student-{{$people->id}}" placeholder="课程学分，未输入的不计分" value="">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{route('credit.index')}}">返回</a>
                        <button type="submit" class="btn btn-danger pull-right">确 定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@extends('credits.js')