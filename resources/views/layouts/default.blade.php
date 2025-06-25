<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Weibo App') - Laravel 新手入门教程</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
          @include('shared._messages')
          @yield('content')
          @include('layouts._footer')
        </div>
      </div>
  </body>
</html>