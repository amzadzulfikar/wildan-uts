<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WrapperController extends Controller
{
    public function boxofficealltime(){
        $json = Http::get('https://imdb-api.com/en/API/BoxOfficeAllTime/k_wuq6ox8s')->json();
        return response()->json($json);
}
    public function userrating(){
    $json = Http::get('https://imdb-api.com/en/API/UserRatings/k_wuq6ox8s/tt1375666')->json();
    return response()->json($json);
}
    public function mostpopuler(){
        $json = Http::get('https://imdb-api.com/en/API/MostPopularMovies/k_wuq6ox8s')->json();
        return response()->json($json);
}
    public function youtubetrailer(){
        $json = Http::get('https://imdb-api.com/en/API/YouTubeTrailer/k_wuq6ox8s/tt1375666')->json();
        return response()->json($json);
}
}
