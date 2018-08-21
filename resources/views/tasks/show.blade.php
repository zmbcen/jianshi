@extends('layouts.default')
@section('title', $task->company_name)
@section('content')

<form method="POST" action="{{ route('tasks.update', $task->id )}}">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <input type='hidden' name='task_id' value="{{ $task -> id }}">
          <button type="submit" class="btn btn-primary btn-lg">设为当前任务</button>
</form>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">单位信息</h3>
    </div>
    <div class="panel-body">
        {{$task -> company_name}}
    </div>
    <table class="table">
        <tr><td>集团名称</td>  <td>{{$task -> group_of_companies}}</td></tr>
        <tr><td>单位负责人</td><td>{{$task -> principal}}</td></tr>
        <tr><td>电话</td>      <td>{{$task -> phone_number_of_principal}}</td></tr>
    </table>
    <div class="panel-body">职能简介
        {{$task -> function_of_company}}
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">填表人信息</div>
    <table class="table">
        <tr><td>姓名</td><td>     {{ $task->name_prepaper }} </td></tr>
        <tr><td>职务</td><td>     {{ $task->position_prepaper }} </td></tr>
        <tr><td>职称</td><td>     {{ $task->title_prepaper }}</td></tr>
        <tr><td>学历</td><td>     {{ $task->education_background_prepaper }} </td></tr>
        <tr><td>联系方式</td><td>{{ $task->phone_number_of_prepaper }} </td></tr>
    </table>
</div>


@stop