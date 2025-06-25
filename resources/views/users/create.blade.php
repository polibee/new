@extends('layouts.default')
@section('title','注册')
@section('content')
<div class="offset-md-2 col-md-8">
<div class="card">
<div class="text-center card-header">
<h5>注册</h5>
</div>
<div class="card-body">
    @include('shared._errors')
<form method="POST" action="{{route('users.store')}}"> 
    @csrf
<div class="mb-3">
<label for="name" class="form-label">名称：</label>
<input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">邮箱：</label>    
    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
</div>
<div class="mb-3">
    <label for="password" class="form-label">密码：</label>    
    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
</div>
<div class="mb-3">
    <label for="password_confirmation" class="form-label">确认密码：</label>    
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
</div>
<div class="text-center">
<button type="submit" class=" btn btn-primary">注册</button>
</div>
</form>
</div>    
</div>    
</div>    



@stop