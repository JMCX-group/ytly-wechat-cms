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
        <div class="col-md-6">
            <div class="box box-info">
                <form class="form-horizontal" action="{{URL::to('timetable/'.$timetable->id)}}" method="post" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$page_title or "page_title"}}</h3>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put">
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">专业名称</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="profession">
                                    <option value="声乐-古典" @if($timetable->profession=="声乐-古典") selected @endif>声乐-古典</option>
                                    <option value="声乐-流行" @if($timetable->profession=="声乐-流行") selected @endif>声乐-流行</option>

                                    <option value="弦乐-小提琴" @if($timetable->profession=="弦乐-小提琴") selected @endif>弦乐-小提琴</option>
                                    <option value="弦乐-大提琴" @if($timetable->profession=="弦乐-大提琴") selected @endif>弦乐-大提琴</option>
                                    <option value="弦乐-吉他" @if($timetable->profession=="弦乐-吉他") selected @endif>弦乐-吉他</option>

                                    <option value="管乐-单簧管" @if($timetable->profession=="管乐-单簧管") selected @endif>管乐-单簧管</option>
                                    <option value="管乐-长笛" @if($timetable->profession=="管乐-长笛") selected @endif>管乐-长笛</option>
                                    <option value="管乐-萨克斯" @if($timetable->profession=="管乐-萨克斯") selected @endif>管乐-萨克斯</option>
                                    <option value="管乐-小号" @if($timetable->profession=="管乐-小号") selected @endif>管乐-小号</option>
                                </select>
                                @include('layouts.message.tips',['field'=>'profession'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course" class="col-sm-3 control-label">课程名称</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="course" name="course" placeholder="课程名称" value="{{$timetable->course}}">
                                @include('layouts.message.tips',['field'=>'course'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="count" class="col-sm-3 control-label">课时数量</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="count" name="count" placeholder="课时数量" value="{{$timetable->class_count}}">
                                @include('layouts.message.tips',['field'=>'count'])
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">状态</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="status" title="状态">
                                    <option value="启用" @if($timetable->status=="启用") selected @endif>启用</option>
                                    <option value="停用" @if($timetable->status=="停用") selected @endif>停用</option>
                                </select>
                                @include('layouts.message.tips',['field'=>'status'])
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-default" href="{{route('timetable.index')}}">返回</a>
                        <button type="submit" class="btn btn-danger pull-right">确 定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
