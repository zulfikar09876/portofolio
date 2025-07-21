<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>doc</title>
  </head>
 <body class="bg-gray-100">

    <nav class="bg-blue-600 text-white px-4 py-3 flex justify-between items-center">
        <div class="text-lg font-bold">
            <a href="#">zulfikar</a>
        </div>
        <div class="space-x-4">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Contact</a>
            <a href="#" class="hover:underline">Login</a>
        </div>
    </nav>
   <div class="p-6">
    <h1 class="text-xl font-bold mb-4">My Fotoooo</h1>
    
    <div class="flex justify-beetween gap-4">
        
        <div class="text-center">
            <img src="{{ asset('img/1.jpg') }}" alt="Gambar 1" class="mb-2 mx-auto">
            <p class="text-xs text-gray-500 mb-1">10 07 2025</p>
            <h2 class="font-bold">Tampak samping</h2>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="text-center">
            <img src="{{ asset('img/2.jpg') }}" alt="Gambar 2" class="mb-2 mx-auto">
            <p class="text-xs text-gray-500 mb-1">10 07 2025</p>
            <h2 class="font-bold">Tampak Depan</h2>
            <p class="text-sm text-gray-600">Fuga ullam possimus illum sequi accusamus quaerat rerum.</p>
        </div>

        <div class="text-center">
            <img src="{{ asset('img/3.jpg') }}" alt="Gambar 3" class="mb-2 mx-auto">
            <p class="text-xs text-gray-500 mb-1">10 07 2025</p>
            <h2 class="font-bold">Tampak samping</h2>
            <p class="text-sm text-gray-600">Expedita, tempore, nam, est at illo dicta recusandae sapiente.</p>
        </div>

    </div>
</div>
 </body>
</html>