<?php
/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 16/04/16
 * Time: 13:35
 */

namespace Nfq\WeatherBundle\Providers;

use Nfq\WeatherBundle\Parsers\OpenWeatherMapParser;
use Nfq\WeatherBundle\Parsers\YahooParser;
use Nfq\WeatherBundle\ValueObjects\Location;
use Nfq\WeatherBundle\ValueObjects\Weather;

class DelegatingProvider implements WeatherProvider
{

    private $providers;
    private $API;

    /**
     * DelegatingProvider constructor.
     * @param array $providers
     * @param array $API
     */
    public function __construct(array $providers, array $API)
    {
        $this->providers = $providers;
        $this->API = $API;
    }

    /**
     * @param Location $location
     * @return Weather
     * @throws WeatherProviderException
     */
    public function fetch(Location $location): Weather
    {
        foreach ($this->providers as $providerIterator) {
            try {
                switch ($providerIterator) {
                    case 'Nfq\WeatherBundle\Providers\OpenWeatherMapProvider':
                        $provider = new $providerIterator(new OpenWeatherMapParser(), $this->API['OpenWeatherMap']);
                        break;
                    case 'Nfq\WeatherBundle\Providers\YahooProvider':
                        $provider = new $providerIterator(new YahooParser());
                        break;
                    default:
                        throw new WeatherProviderException(sprintf('Provider is not in the list of providers.'));
                }
                return $provider->fetch($location);

            } catch (\Exception $e) {
                error_log(sprintf('No data received. Error : %s', $e->getMessage()));
            }
        }
        throw new WeatherProviderException('No active providers available.');
    }
}