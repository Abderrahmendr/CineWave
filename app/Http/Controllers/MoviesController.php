<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MoviesController extends Controller
{
    //


    public function index()
    {

        $popularMovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular?api_key=3e0a917baa2ad47e37244f4af42b4eb0' )
        ->json()['results'];

        $popularShows = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular?api_key=3e0a917baa2ad47e37244f4af42b4eb0' )
        ->json()['results'];


        $genres = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?api_key=3e0a917baa2ad47e37244f4af42b4eb0' )
        ->json()['genres'];



        return view('index',[

            'popularMovies' => $popularMovies,
            'popularShows' => $popularShows,
            'genres' => $genres,

        ]);
    }

                                              //SHOW FUNCTION

    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=3e0a917baa2ad47e37244f4af42b4eb0&append_to_response=credits,videos,images')
        ->json();

 
        return view('show', compact('movie'));

    }
}

