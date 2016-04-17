<?php
/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 16/04/16
 * Time: 18:06
 */

namespace Nfq\WeatherBundle\Providers;

use Nfq\WeatherBundle\Parsers\OpenWeatherMapParser;
use Nfq\WeatherBundle\Parsers\YahooParser;
use Nfq\WeatherBundle\ValueObjects\Location;
use Nfq\WeatherBundle\ValueObjects\Weather;

class CachedProvider implements WeatherProvider
{

    private $provider;
    private $API;
    private $ttl;
    private $providers;

    /**
     * CachedProvider constructor.
     * @param string $provider
     * @param array $providers
     * @param int $ttl
     * @param array $API
     */
    public function __construct(string $provider, array $providers, int $ttl, array $API)
    {
        $this->provider = $provider;
        $this->providers = $providers;
        $this->ttl = $ttl;
        $this->API = $API;
    }

    /**
     * @param Location $location
     * @return Weather
     */
    public function fetch(Location $location): Weather
    {
        $fileDirectory = 'cached/';
        if (!is_dir($fileDirectory))
        {
            mkdir($fileDirectory, 0775, true);
        }
        $filename = $fileDirectory . $location->getCity() . '.txt';
        if (file_exists($filename))
        {
            $file = file($filename);
            $dateNow = new \DateTime('now');
            $dateNow = $dateNow->getTimestamp();
            $dateThen = $file[0];
            if (intval($dateNow) - intval($dateThen) >= $this->ttl)
            {
                //printf("New values were taken:");
                return $this->writeToFile($this->ProviderFetchWeather($location), $filename);
            }
            else
            {
                //printf("Information from cached file: sena: %d  dabar %d laiko skirtumas: %d", $dateThen, $dateNow, $this->ttl);
                //var_dump($filename);
                return new Weather(trim($file[1]), trim($file[2]), $file[3]);
            }
        }
        return $this->writeToFile($this->ProviderFetchWeather($location), $filename);
    }

    /**
     * @param Weather $weather
     * @param string $filename
     * @return Weather
     */
    private function writeToFile(Weather $weather, string $filename)
    {
        $dateNow = new \DateTime('now');
        $text =  $dateNow->getTimestamp().PHP_EOL." ".$weather->getTemperature().PHP_EOL." "
            .$weather->getWind().PHP_EOL." ".$weather->getCity();
        file_put_contents($filename, $text);

        return $weather;
    }

    /**
     * @param Location $location
     * @return Weather
     * @throws WeatherProviderException
     */
    public function ProviderFetchWeather(Location $location): Weather
    {
        switch ($this->provider)
        {
            case 'Nfq\WeatherBundle\Providers\YahooProvider':
                $provider = new $this->provider(new YahooParser());
                $weather = $provider->fetch($location);
                break;

            case 'Nfq\WeatherBundle\Providers\OpenWeatherMapProvider':
                $provider = new $this->provider(new OpenWeatherMapParser(), $this->API['OpenWeatherMap']);
                $weather = $provider->fetch($location);
                break;

            case 'Nfq\WeatherBundle\Providers\DelegatingProvider':
                $provider = new $this->provider($this->providers, $this->API);
                $weather = $provider->fetch($location);
                break;
            default:
                throw new WeatherProviderException(sprintf('Provider is not in the list of providers.'));
                break;
        }
        return $weather;
    }
}