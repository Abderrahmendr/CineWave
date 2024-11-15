
<div class="mt-8 hover:scale-105">
    <a href="{{ route('movie.show', $movie['id']) }}" class="">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$movie['poster_path'] }}" alt="" class="border-white border-1 rounded-lg ">
    </a>
<div class="mt-2">
    <a href="{{ route('movie.show', $movie['id']) }} " class="hover:text-cyan-500 text-gray-400 mt-4 ml-4 text-lg">{{ $movie['title'] }}</a>
</div>

<div class="flex items-center justify-between text-gray-400">
    <span> {{ $movie['release_date'] }} </span>
    <span class="font-semibold">*</span>
    <span class="flex "><span class="text-yellow-500 mr-2 ">★</span>  {{  $movie['vote_average']  * 10 . '%'}}</span>
    <span class="font-semibold">*</span>

    <span class=" border-gray-400 border-2  px-1">Movie</span>


</div>

</div>



