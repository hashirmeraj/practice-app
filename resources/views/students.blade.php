

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class=" w-[50%] h-[200px] bg-white"> 
    <h1>hashssankj</h1>
  </div>
  @foreach ($data as $id => $users)
    <h3>{{$users->id }}</h3>
    <h3>{{$users->Name }}</h3>
    <h3>{{$users->Email }}</h3>
@endforeach
</body>
</html>