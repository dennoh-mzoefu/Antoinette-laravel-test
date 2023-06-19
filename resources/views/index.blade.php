<h1>Am here</h1>

<div>

    @forelse ($users as $user)
    <div>
        <!-- <a href ="{{route('users',['id'=>$user->id])}}">{{$user -> name}}</a> -->
        <a href ="/user/{{$user->id}}/roles">{{$user -> name}}</a>
    </div>
    @empty
    <div>There are no users</div>
    @endforelse

     
</div>
