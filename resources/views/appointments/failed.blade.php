<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/3/23
 * Time: 上午11:30
 */
?>

@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">约诊列表</h3>
                    <div class="box-tools pull-right">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="快速查询">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default disabled">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>序号</th>
                            <th>医生姓名</th>
                            <th>患者姓名</th>
                            <th>患者手机号</th>
                            <th>患者病历</th>
                            <th>价格</th>
                            <th>状态</th>
                            <th>管理操作</th>
                        </tr>
                        @forelse($appointments as $appointment)
                            <tr>
                                <td>{{$appointment->id}}</td>
                                <td>{{$appointment->doctor}}</td>
                                <td>{{$appointment->patient_name}}</td>
                                <td>{{$appointment->patient_phone}}</td>
                                <td>{{$appointment->patient_history}}</td>
                                <td>{{$appointment->price}}</td>
                                <td>{{$appointment->status}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{URL::to('appointment/view/'.$appointment->id)}}">
                                        详情
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">暂无数据</td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                @if($appointments->render() !== "")
                    <div class="box-footer">
                        {!! $appointments->render() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
@section('script')
    <script type="text/javascript">
        $('#defalutModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var url = button.data('url');
            var modal = $(this);

            modal.find('form').attr('action', url);
        })
    </script>
@stop
