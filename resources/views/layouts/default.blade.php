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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>