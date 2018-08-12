@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>鉴势 V1.0</h1>
    <p class="lead">
      欢迎您使用<a href="https://github.com/zmbcen/jianshi">鉴势—工控系统信息安全快速核查系统</a>
    </p>
    <p>
      鉴势已经为您核查过69家公司
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('add_task')}}" role="button">添加新任务</a>
    </p>
  </div>
@stop