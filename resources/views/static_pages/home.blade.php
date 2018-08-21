@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>鉴势 V1.0</h1>
    <p class="lead">
      欢迎您使用<a href="https://github.com/zmbcen/jianshi">鉴势—工控系统信息安全快速核查系统</a>
    </p>
    @if(Auth::check())
    <p class="lead">
        我们已经为您核查了<a href="{{ route('tasks.index') }}">xxx家公司</a>
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('tasks.create')}}" role="button">添加新任务</a>
    </p>
    @else
    <p>
        ----为工控核查而生
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('login')}}" role="button">马上登录</a>
    </p>
    @endif
  </div>
@stop