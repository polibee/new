@extends('layouts.default')
@section('title','$user->name')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <section class="user_info">
          @include('shared._user_info', ['user' => $user])
        </section>
      </div>
    </div>
  </div>
  
@stop