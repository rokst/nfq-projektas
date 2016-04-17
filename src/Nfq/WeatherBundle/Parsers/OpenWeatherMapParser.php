<?php

/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 15/04/16
 * Time: 16:56
 */

namespace Nfq\WeatherBundle\Parsers;

use Nfq\WeatherBundle\Providers\WeatherProviderException;
use Nfq\WeatherBundle\ValueObjects\Weather;

class OpenWeatherMapParser
{
    /**
     * OpenWeatherDataParser constructor.
     * @param $data
     * @return Weather
     * @throws WeatherProviderException
     */
    public function parse($data):Weather
    {
        $json = json_decode($data,true);

        $temp = $json["main"]["temp"];
        $city = $json["name"];
        $wind = $json ["wind"]["speed"];

        $weather = new Weather($temp, $wind, $city);

        if($weather == NULL)
        {
            throw new WeatherProviderException("No data received from OpenWeather Parser.");
        }

        return $weather;
    }
}