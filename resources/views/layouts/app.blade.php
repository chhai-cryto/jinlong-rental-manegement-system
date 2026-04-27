<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-red-500">

    <x-hearder />

     <div class="flex">

        <x-sidebar />
    

        <div class="ml-64 p-6 w-full mt-16">
            @yield('content')
        </div>
     </div>
    
</body>
</html>