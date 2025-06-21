<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Weibo App') - Laravel 新手入门教程</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container">
          <a class="navbar-brand" href="/">Weibo App</a>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
            <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
          </ul>
        </div>
      </nav>
    @yield('content')
   
  </body>
</html>