@extends('layouts.default')
@section('title', '登录')
@section('content')
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card ">
        <div class="card-header bg-primary text-white text-center py-3">
          <h4 class="mb-0">登录</h4>
        </div>
        
        <div class="card-body p-4">
          @include('shared._messages')
          
          <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- 邮箱字段 -->
            <div class="mb-3">
              <label for="email" class="form-label">邮箱</label>
              <input type="email" class="form-control form-control-lg" 
                     id="email" name="email" 
                     value="{{ old('email') }}"
                     placeholder="请输入邮箱"
                     required autofocus>
            </div>
            
            <!-- 密码字段 -->
            <div class="mb-3">
              <label for="password" class="form-label">密码</label>
              <div class="input-group">
                <input type="password" class="form-control form-control-lg" 
                       id="password" name="password"
                       placeholder="请输入密码" required>
                <button class="btn btn-outline-secondary" type="button" 
                        id="togglePassword">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
            </div>
            
            <!-- 记住我 -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" 
                     name="remember" id="remember" 
                     {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                记住我
              </label>
            </div>
            
            <!-- 登录按钮 -->
            <div class="d-grid mb-4">
              <button type="submit" class="btn btn-primary btn-lg">
                登录
              </button>
            </div>
            
            <!-- 辅助链接 -->
            <div class="d-flex justify-content-between">
              <a href="#" class="text-decoration-none">忘记密码？</a>
              <a href="{{ route('users.create') }}" class="text-decoration-none">
                现在注册
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 密码显示切换脚本 -->
<script>
  document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordField = document.getElementById('password');
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    this.innerHTML = type === 'password' 
      ? '<i class="bi bi-eye"></i>' 
      : '<i class="bi bi-eye-slash"></i>';
  });
</script>
@endsection