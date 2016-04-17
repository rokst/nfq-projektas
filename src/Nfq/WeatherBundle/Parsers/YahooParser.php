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

class YahooParser
{
    /**
     * @param string $data
     * @return Weather
     * @throws WeatherProviderException
     */
    public function parse(string $data):Weather
    {
        $json = json_decode($data,true);

        $temp = $json['query']['results']['channel']['item']['condition']['temp'];
        $city = $json['query']['results']['channel']['location']['city'];
        $wind = round(($json['query']['results']['channel']['wind']['speed']) / 3.6, 1);

        $weather = new Weather($temp, $wind, $city);

        if($weather == NULL)
        {
            throw new WeatherProviderException("No data received from Yahoo Parser.");
        }

        return $weather;
    }
}