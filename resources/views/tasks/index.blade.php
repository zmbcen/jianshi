@extends('layouts.default')
@section('title', '历史任务')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>历史任务</h1>
  <ul class="tasks">
    @foreach ($tasks as $task)
      <li>
        <a href="{{ route('tasks.show', $task->id) }}" class="companyname">{{ $task->company_name }}</a>
      </li>
    @endforeach
  </ul>
</div>
@stop