<?php
namespace App\Http\Controllers; use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Http; 
class MixController extends Controller 
{ 
    public function index() 

    {
        $apiKey = env('TMDB_API_KEY');

        // nowPlayingMovies 
         $nowPlayingMovies = Http::withToken(config('services.tmdb.token')) 
        ->get('https://api.themoviedb.org/3/movie/now_playing?api_key='.$apiKey ) 
        ->json()['results']; 
        $nowPlayingMovies = array_slice($nowPlayingMovies, 0, 10);
        
        // OnTheAir
        $OnTheAir = Http::withToken(config('services.tmdb.token')) 
        ->get('https://api.themoviedb.org/3/tv/on_the_air?api_key='.$apiKey ) 
        ->json()['results']; 

        $OnTheAir = array_slice($OnTheAir, 0, 10);

        return view('mix.index',
         [ 'nowPlayingMovies' => $nowPlayingMovies, 'OnTheAir' => $OnTheAir, ]
        );
    } 
        
}