<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '鉴势') -工控系统信息安全快速核查系统</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </body>
</html>