<?php

/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 15/04/16
 * Time: 17:02
 */

namespace Nfq\WeatherBundle\ValueObjects;

class Location
{
    private $city;

    /**
     * Location constructor.
     * @param $city
     */
    public function __construct($city)
    {
        $this->city = $city;
    }

    /**
     * @return String
     */
    public function getCity():String
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