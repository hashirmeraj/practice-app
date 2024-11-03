

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  {{-- <div class=" w-[50%] h-[200px] bg-black"> 
    <h1>hashssankj</h1>
  </div>
  @foreach ($data as $id => $users)
    <h3>{{$users->id }}</h3>
    <h3>{{$users->Name }}</h3>
    <h3>{{$users->Email }}</h3>
@endforeach --}}






<div class="relative overflow-x-auto  sm:rounded-lg w-full h-[100vh] flex items-center justify-center ">
  <table class=" w-3/5 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Id
              </th>
              <th scope="col" class="px-6 py-3">
                  Name
              </th>
              <th scope="col" class="px-6 py-3">
                  Email
              </th>
              
          </tr>
      </thead>
      
      <tbody>
          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
              @foreach ($data as $id => $users)
                  
              
              <td class="px-6 py-4">
                {{$users->id }}
              </td>
              <td class="px-6 py-4">
                {{$users->Name }}
              </td>
              <td class="px-6 py-4">
                {{$users->Email }}
              </td>
              @endforeach
              
          </tr>
         
          
      </tbody>
  </table>
</div>

</body>
</html>