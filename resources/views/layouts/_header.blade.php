<header class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="col-md-offset-1 col-md-10">
      <a href="/" id="logo">鉴势</a>
      <nav>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
            <li><a href="#">当前任务</a></li>
            <li><a href="#">添加任务</a></li>
            <li><a href="#">历史分析</a></li>
            <li><a href="#">行业库更新</a></li>
            <li><a href="#">设置</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 个人中心<b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">编辑资料</a></li>
                <li class="divider"></li>
                <li>
                  <a id="logout" href="#">
                    <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                    </form>
                  </a>
                </li>
              </ul>
            </li>

            @else
            <li><a href="{{ route('signup') }}">注册</a></li>
            <li><a href="{{ route('help') }}">帮助</a></li>
            <li><a href="{{ route('login') }}">登录</a></li>
            @endif
        </ul>
      </nav>
    </div>
  </div>
</header>
