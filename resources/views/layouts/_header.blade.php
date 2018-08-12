<header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="{{ route('home') }}" id="logo">鉴势</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('current_task') }}">当前任务</a></li>
              <li><a href="{{ route('add_task') }}">添加任务</a></li>
              <li><a href="{{ route('history') }}">历史</a></li>
              <li><a href="{{ route('update_database') }}">行业库更新</a></li>
              <li><a href="{{ route('setting') }}">设置</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>