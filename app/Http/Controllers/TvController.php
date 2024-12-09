<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\TvViewModel;
use App\ViewModels\TvShowViewModel;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
{
    // Fetch popular TV shows from the API
    $popularTv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular?api_key=3e0a917baa2ad47e37244f4af42b4eb0')
        ->json()['results'];

        $airing  = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/airing_today?api_key=3e0a917baa2ad47e37244f4af42b4eb0')
        ->json()['results'];

        $OnTheAir = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/on_the_air?api_key=3e0a917baa2ad47e37244f4af42b4eb0')
        ->json()['results'];

    // Fetch top-rated TV shows from the API
    $topRatedTv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/top_rated?api_key=3e0a917baa2ad47e37244f4af42b4eb0')
        ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?api_key=3e0a917baa2ad47e37244f4af42b4eb0' )
        ->json()['genres'];

    // Pass both popularTv and topRatedTv to the view
    return view('tv.index', [
        'popularTv' => $popularTv,
        'topRatedTv' => $topRatedTv,
        'airing '=> $airing,
        'OnTheAir'=> $OnTheAir,
        'genres' => $genres,
    ]);
}
    
 
public function show($id)
{
    $tvshow = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/'.$id.'?api_key=3e0a917baa2ad47e37244f4af42b4eb0&append_to_response=credits,videos,images')
        ->json();
        

     return view('tv.show', compact('tvshow'));  
}
}
