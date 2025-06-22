<div class="text-center my-4">
<a href="{{route('users.show',$user->id)}}">
    <img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="rounded-circle img-fluid shadow" style="width: 140px; height: 140px;"/>
</a>
<h1 class="h4 mt-3">{{$user->name}}</h1>
</div>