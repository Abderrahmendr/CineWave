@extends('layouts.main')

@section('content')
    <div class="tv-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$tvshow['poster_path'] }}" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24 flex-col ">
                           <!--TITLE-->

                <div class="title">
                    <h2 class="text-4xl mt-4 md:mt-0 font-semibold">
                        {{ $tvshow['name'] }}
                    </h2>
                          <!------TRAILER ------>
                    <div class="m-4  flex   relative">
                        @if (count($tvshow['videos']['results']) > 0)

                    <a href="https://youtube.com/watch?v={{ $tvshow['videos']['results']['0']['key'] }}"  target="_blank"  class="  flex border-neutral-50 border p-2 hover:bg-cyan-900 hover:scale-110 cursor-pointer  ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 text-white cursor-pointer " width="24" height="24" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>
                        <p class="text-md cursor-pointer">
                            Trailer
                       </p>
                    </a>
                    @endif


                    </div>
                    <div class=" relative -mt-6   ">
                                             <!--OVERWIEW-->

                                <div class="overview space-y-3 ">
                                    <div class="flex flex-wrap items-center text-gray-400 text-sm mt-4">

                                     <p class="text-gray-300 mt-20">
                                      {{ $tvshow['overview'] }}
                                    </p>
                                  </div>
                                </div>
                                             <!--RELEASE-->
                                  <div class="release space-y-3">
                                    <div class="mt-6  ">
                                        <span class="ml-1 flex">
                                            <p class="font-bold mx-2">Release :   </p>
                                            {{ $tvshow['first_air_date'] }}
                                        </span>

                                  </div>
                                            <!---GENRE--->
                                 <div class="genre space-y-3">

                                        <span class="ml-1 flex">
                                            <p class="font-bold mx-2">Genre :   </p>
                                        <span>
                                            @foreach ($tvshow['genres'] as $genre)
                                             {{ $genre['name'] }}@if (!$loop->last), @endif
                                              @endforeach
                                       </span>
                                       </span>
                                    </div>


                                             <!--CASTES-->
                                 <div class="Casts space-y-3">
                                    <span class="   flex ">
                                        <p class="pr-4 pl-3 font-bold ">Casts:</p>

                                        @foreach ($tvshow['credits']['cast'] as $cast)

                                      @if ($loop->index < 10 )    
                                       <div class="mt-8 mr-4">
                             <img src="{{ $cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                         <div class="mt-2 ">
                             <div class="text-sm text-gray-400 ">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

                                    </span>
                                    </span>
                                 </div>
                                            <!--COUNTRY-->
                                      <div class="country space-y-3">
                                        <span class="flex ml-1">
                                            <p class="mx-2 font-bold">Country : </p>
                                            @foreach ($tvshow['production_countries'] as $production_countries)

                                            @if ($loop->index <  3)
                                            <div>
                                                <div class="px-2"> {{$production_countries['name'] }}</div>
                                            </div>
                                                  @endif
                                            @endforeach
                                        </span>
                                      </div>

                                           <!--LANGUAGE-->
                                 <div class="language">
                                    <span>
                                        <span class="flex">
                                            <p class=" font-bold ml-4">Language : </p>
                                            @foreach ($tvshow['spoken_languages'] as $spoken_languages)

                                            @if ($loop->index <  3)
                                            <div>
                                                <div class="px-2"> {{$spoken_languages['name'] }}</div>
                                            </div>
                                                  @endif
                                            @endforeach
                                        </span>
                                    </span>
                                 </div>
                                          <!----PRODUCTION---->
                                          <div class="production">
                                            <span>
                                                <span class="flex">
                                                    <p class=" font-bold ml-4">Production: </p>
                                                    @foreach ($tvshow['production_companies'] as $production_companies)

                                                    @if ($loop->index <  2)
                                                    <div>
                                                        <div class="px-2"> {{$production_companies['name']  }} </div>
                                                    </div>
                                                          @endif
                                                    @endforeach
                                                </span>
                                          </div>
                              </div>

        </div>
    </div> 
                      <!-- end tv-info -->

    <div class="tv-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($tvshow['credits']['cast'] as $cast)
              @if ($loop->index < 10 )
                    <div class="mt-8">
                             <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                         <div class="mt-2">
                             <div class="text-sm text-gray-400 ">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> 
                        <!-- end tv-cast -->

                        <div class="images flex-cols-2">
            <div class=" ">
                <p class="text-4xl font-semi-bold m-4">
                    Images
                </p>
            </div>
            <div class="grid grid-cols-5">
                @foreach ($tvshow['images']['backdrops'] as $images)

            @if ($loop->index < 10 )

         <div class=" px-2  ">
            <span  class=" p-4 m-4 grid-rows-2">
                <img src="{{  'https://image.tmdb.org/t/p/w500/' .$images['file_path']  }}" class="  h-90 w-90 ">

               </span>
        </div>

            @endif
     @endforeach<!-- end tv-images -->
@endsection