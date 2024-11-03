

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>




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
              <th scope="col" class="px-6 py-3">
                  Action
              </th>
              
          </tr>
      </thead>
      
      <tbody>
        @foreach ($data as $id => $users)
          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
              
                  
              
              <td class="px-6 py-4">
                {{$users->id }}
              </td>
              <td class="px-6 py-4">
                {{$users->Name }}
              </td>
              <td class="px-6 py-4">
                {{$users->Email }}
              </td>
              <td class="px-6 py-4">
                <a href="{{route('view.single', $users->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
            </td>
            </tr>
        @endforeach
         
          
      </tbody>
  </table>
</div>

</body>
</html>