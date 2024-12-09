<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Vite compiled CSS -->
    @vite('resources/css/main.css')

    <!-- Livewire styles -->
    <livewire:styles />

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title> CineWave</title>
</head>
<body class="font-sans bg-gray-900 text-white">

    <!-- Navbar Section -->
     <nav class="border-b border-gray-600">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('mix.index') }}" class="font-bold ">
                        <img src="img/movie_logo.png" alt="logo" class="w-12 h-12">
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('mix.index') }}" class="hover:text-cyan-500 hover:border-b-2 pb-2">Home</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movie.index') }}" class="hover:text-cyan-500 hover:border-b-2 pb-2">Movies</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">    
                    <a href="{{ route ('tv.index')}}" class="hover:text-cyan-500 hover:border-b-2 pb-2">TV Show</a>
                </li>
                
            </ul>

            <!-- Search Dropdown -->
            <livewire:search-dropdown />
        </div>
    </nav>
     <!-- Main Content Section -->
@yield('content')  
 
     <livewire:scripts />
 </body>
</html>
