@extends('layouts.default')
@section('title', '添加任务')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>单位信息</h5>
    </div>
    <div class="panel-body">
      <form method="POST" action="{{ route('tasks.store') }}">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="company_name">单位名称</label>
            <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
          </div>

          <div class="form-group">
            <label for="group_of_companies">集团名称</label>
            <input type="text" name="group_of_companies" class="form-control" value="{{ old('group_of_companies') }}">
          </div>

          <div class="form-group">
            <label for="principal">负责人</label>
            <input type="text" name="principal" class="form-control" value="{{ old('principal') }}">
          </div>

          <div class="form-group">
            <label for="phone_number_of_principal">电话</label>
            <input type="text" name="phone_number_of_principal" class="form-control" value="{{ old('phone_number_of_principal') }}">
          </div>

          <div class="form-group">
            <label for="function_of_company">职能简介</label>
            <input type="text" name="function_of_company" class="form-control" value="{{ old('function_of_company') }}">
          </div>

          <div class="panel-title">
                <h5>核查人员信息</h5>
          </div>

          <div class="form-group">
            <label for="name_prepaper">姓名</label>
            <input type="text" name="name_prepaper" class="form-control" value="{{ old('name_prepaper') }}">
          </div>


          <div class="form-group">
            <label for="position_prepaper">职务</label>
            <input type="text" name="position_prepaper" class="form-control" value="{{ old('position_prepaper') }}">
          </div>

          <div class="form-group">
            <label for="title_prepaper">职称</label>
            <input type="text" name="title_prepaper" class="form-control" value="{{ old('title_prepaper') }}">
          </div>

          <div class="form-group">
            <label for="education_background_prepaper">学历</label>
            <input type="text" name="education_background_prepaper" class="form-control" value="{{ old('education_background_prepaper') }}">
          </div>

          <div class="form-group">
            <label for="phone_number_of_prepaper">手机</label>
            <input type="text" name="phone_number_of_prepaper" class="form-control" value="{{ old('phone_number_of_prepaper') }}">
          </div>

          <button type="submit" class="btn btn-primary">添加任务</button>
      </form>
    </div>
  </div>
</div>
@stop