<?php

/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 15/04/16
 * Time: 16:58
 */

namespace Nfq\WeatherBundle\Providers;

use Nfq\WeatherBundle\ValueObjects\Location;
use Nfq\WeatherBundle\ValueObjects\Weather;

interface WeatherProvider
{
    public function fetch(Location $location): Weather;
}