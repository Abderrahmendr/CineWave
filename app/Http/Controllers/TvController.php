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
    $apiKey = env('TMDB_API_KEY');

    $popularTv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular?api_key='.$apiKey )
        ->json()['results'];

        $airing  = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/airing_today?api_key='.$apiKey )
        ->json()['results'];

        $OnTheAir = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/on_the_air?api_key='.$apiKey )
        ->json()['results'];

     $topRatedTv = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/top_rated?api_key='.$apiKey )
        ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?api_key='.$apiKey  )
        ->json()['genres'];

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
    $apiKey = env('TMDB_API_KEY');

    $tvshow = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/'.$id.'?api_key='.$apiKey.'&append_to_response=credits,videos,images')
        ->json();
        

     return view('tv.show', compact('tvshow'));  
}
}
