@extends('layouts.default')
@section('content')
<div class="container">
    <div class="bg-light p-3 p-sm-5 rounded">
   <h1>Hello Laravel</h1>
<p class='lead'>
    你现在看到的是<a href="https://learnku.com/courses/laravel-essential-training">Laravel入门教程</a>的安装示例页面。
</p>
<p>
    一切，将从这里开始。
</p>
<p>
    <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
</p>
</div>
</div>
@stop