<div class="list-group-item">
    <img class="mr-3" src="{{$user->gravatar()}}" alt="{{$user->name}}" width="32">
    <a href="{{route('users.show',$user)}}">{{$user->name}}</a>
    @if($user->is_admin)
        <span class="badge badge-primary ml-2">管理员</span>
    @endif
    @auth
        @can('destroy',$user)
        <form action="{{route('users.destroy',$user)}}" method="POST" class="float-end">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('确定要删除用户 {{$user->name}} 吗？')">删除</button>
        </form>
        @else
            @if(Auth::user()->id === $user->id)
                <small class="text-muted float-end">不能删除自己</small>
            @elseif(!Auth::user()->is_admin)
                <small class="text-muted float-end">需要管理员权限</small>
            @endif
        @endcan
    @endauth
</div>