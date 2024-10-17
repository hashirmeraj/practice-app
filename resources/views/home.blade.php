@foreach ($users as $id => $user )
    <h1>Name: {{$user['name']}} | Phone: {{$user['phone']}}
        <a href="{{route()}}"></a>
    </h1>
@endforeach