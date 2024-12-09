@extends('layouts.main')

@section('content')
    <div class="container mx-auto p-16 px-4 pt-16">
          <!-- now-playing-movies -->

          <div class="now-playing-movies ">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> 
        <!-- end now-playing-movies -->

     <!--   pouplar-Movies -->

        <div class="popular-movies mt-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
               
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie"  />
                @endforeach
            </div>
        </div>
      <!-- end pouplar-Movies -->
        <!--   top rated-Movies -->

        <div class="top-rated-movies mt-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
               
                @foreach ($topRated as $movie)
                    <x-movie-card :movie="$movie"  />
                @endforeach
            </div>
        </div>
      <!-- end top-rated-Movies -->
        <!--   upcoming-Movies -->

        <div class="upcoming-movies mt-14">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Upcoming Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
               
                @foreach ($upcoming as $movie)
                    <x-movie-card :movie="$movie"  />
                @endforeach
            </div>
        </div>
      <!-- end upcoming-Movies -->

      
  </div>
 



@endsection
