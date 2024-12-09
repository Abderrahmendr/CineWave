@extends('layouts.main')


@section('content')
    <div class="container mx-auto p-16 px-4 pt-16">
          <!-- now-playing-movies -->

          <div class="now-playing-movies py-2">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> 
        <!-- end now-playing-movies -->

        <div class="on_the_air py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">On The Air</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($OnTheAir  as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div> 
       
       

      
  </div>

@endsection
