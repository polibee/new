<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">Weibo App</a>
      <ul class="navbar-nav justify-content-end">
        @if (Auth::check())
        <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">用户列表</a></li>
        <li class="nav-item drtopdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{Auth::user()->name}}
</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('users.show', Auth::user())}}">个人中心</a>
          <a class="dropdown-item" href="{{route('users.edit', Auth::user())}}">设置</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('logout')}}">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              {{method_field('DELETE')}}
              <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
            </form>
          </a>
        </div>
        </li>
        
            
        @else
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a></li>
        @endif
       
      </ul>
    </div>
  </nav>