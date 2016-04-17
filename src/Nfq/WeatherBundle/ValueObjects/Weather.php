<?php

/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 15/04/16
 * Time: 17:02
 */

namespace Nfq\WeatherBundle\ValueObjects;

class Weather
{
    private $temperature;
    private $wind;
    private $city;

    /**
     * Weather constructor.
     * @param $temperature
     * @param $wind
     * @param $city
     */
    public function __construct($temperature, $wind, $city)
    {
        $this->setTemperature($temperature);
        $this->setWind($wind);
        $this->setCity($city);
    }

    /**
     * @return int
     */
    public function getTemperature():int
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return double
     */
    public function getWind():float
    {
        return $this->wind;
    }

    /**
     * @param double $wind
     */
    public function setWind($wind)
    {
        $this->wind = $wind;
    }

    /**
     * @return String
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
}