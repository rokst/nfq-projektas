<?php

/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 15/04/16
 * Time: 16:58
 */

namespace Nfq\WeatherBundle\Providers;

use GuzzleHttp\Client;
use Nfq\WeatherBundle\Parsers\OpenWeatherMapParser;
use Nfq\WeatherBundle\ValueObjects\Location;
use Nfq\WeatherBundle\ValueObjects\Weather;

class OpenWeatherMapProvider implements WeatherProvider
{
    private $API;
    /**
     * @var OpenWeatherMapParser
     */
    private $parser;

    /**
     * WeatherProvider constructor.
     * @param OpenWeatherMapParser $parser
     * @param $API
     */
    public function __construct(OpenWeatherMapParser $parser, $API)
    {
        $this->parser=$parser;
        $this->setAPI($API);
    }

    /**
     * @param Location $location
     * @return Weather
     * @throws WeatherProviderException
     */
    public function fetch(Location $location): Weather
    {
        $client = new Client([

            // Base URI is used with relative requests
            'base_uri' => 'http://api.openweathermap.org/data/2.5/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'weather?q='.$location->getCity().'&appid='.$this->getAPI().'&units=metric');

        $data = $response -> getBody();

        if($data == NULL)
        {
            throw new WeatherProviderException('No data received from OpenWeatherMap Provider');
        }

        return $this->parser->parse($data);
    }

    /**
     * @return mixed
     */
    public function getAPI()
    {
        return $this->API;
    }

    /**
     * @param mixed $API
     */
    public function setAPI($API)
    {
        $this->API = $API;
    }
}