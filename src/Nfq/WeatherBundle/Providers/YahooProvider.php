<?php

/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 15/04/16
 * Time: 16:58
 */

namespace Nfq\WeatherBundle\Providers;

use Nfq\WeatherBundle\Parsers\YahooParser;
use Nfq\WeatherBundle\ValueObjects\Location;
use Nfq\WeatherBundle\ValueObjects\Weather;

class YahooProvider implements WeatherProvider
{
    private $parser;

    /**
     * YahooProvider constructor.
     * @param YahooParser $parser
     */
    public function __construct(YahooParser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param Location $location
     * @return Weather
     * @throws WeatherProviderException
     */
    public function fetch(Location $location): Weather
    {
        $BASE_URL = "http://query.yahooapis.com/v1/public/yql";

        $yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1)
          where text = "'.$location->getCity().'") and u="c"'   ;

        $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";

        $session = curl_init($yql_query_url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
        $data = curl_exec($session);

        if($data == NULL)
        {
            throw new WeatherProviderException('No data received from Yahoo Provider');
        }

        return $this->parser->parse($data);
    }
}