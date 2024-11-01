@foreach ($data as $id => $users)
    <h3>{{$users->id }}</h3>
    <h3>{{$users->Name }}</h3>
    <h3>{{$users->Email }}</h3>
@endforeach