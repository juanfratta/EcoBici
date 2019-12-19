<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Curl;
class ClimaController extends Controller
{


Public function verClima(){

    $data =Curl::to('https://www.metaweather.com/api/location/468739/')->get();
    $clima=json_decode($data,true);
    // Clima contiene temperatura y probabilidad de lluvia

    // dd($clima["consolidated_weather"]);
    // dd($clima);
    $vac = compact("clima");
    return view("clima",$vac );
}


}
