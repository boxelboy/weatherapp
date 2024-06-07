<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    private string $city = 'Plymouth';
    private string $country = 'UK';
    private string $WEATHER_API_KEY = '0f0156019d1af33529b5871511be0093';
    private object $weatherData;

    public function __construct() {
        $weatherResponse = Http::get('https://api.openweathermap.org/data/2.5/weather?q='.$this->city.', '.$this->country.'&units=metric&appid='.$this->WEATHER_API_KEY);
        $this->weatherData = json_decode(($weatherResponse->body()));
    }

    public function getWeather(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data = [
            'temp' => $this->weatherData->main->temp,
            'weather' => $this->weatherData->weather[0]->description
        ];
        return view('weather', $data);
    }
}
