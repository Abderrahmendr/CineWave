<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/main.css')
    <livewire:styles />


    <title>Movie-app</title>

</head>
<body class=" font-sans bg-gray-900 text-white">
                                                        {{-- ----------NAVBAR--}}
    <nav class=" border-b border-gray-600 ">
<div class="container mx-auto flex items-center justify-between px-5 py-7">
    <ul class=" ml-24 flex items-center justify-center">
       <a href="{{ route('movie.index') }}" >LOGO</a>
       <li class="ml-32">
        <a href="{{ route('movie.index') }}" class="hover:text-cyan-500 hover:border-b-2 pb-4 ">Home</a>
       </li>
       <li class="ml-10">
        <a href="/" class="hover:text-cyan-500  hover:border-b-2 pb-4">Movies</a>
       </li>
       <li class="ml-10">
        <a href="#" class="hover:text-cyan-500 hover:border-b-2 pb-4">TV Show</a>
       </li>
       <li class="ml-10">
        <a href="#" class="hover:text-cyan-500 hover:border-b-2 pb-4">Top IMDB</a>
       </li>

    </ul>
    <livewire:search-dropdown>

</div>
</nav>

 @yield('content')
 <livewire:styles />

</body>
</html>


