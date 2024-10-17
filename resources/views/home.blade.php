@foreach ($users as $id => $user )
    <h1>Name: {{$user['name']}} | Phone: {{$user['phone']}}
        <a href="{{route('view.user',$id)}}"> Show</a>
    </h1>
@endforeach