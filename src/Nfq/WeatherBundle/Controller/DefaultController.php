<?php

namespace Nfq\WeatherBundle\Controller;

use Nfq\WeatherBundle\ValueObjects\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/orai/{city}", defaults={"city" = "Vilnius"})
     * @param $city
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function indexAction($city)
    {

        $location = new Location($city);
        $provider = $this->get('nfq_weather.provider');
        $weather = $provider->fetch($location);

        return $this->render('WeatherBundle:Default:index.html.twig', [
            "temp" => $weather->getTemperature(),
            "name" => $weather->getCity(),
            "wind" => $weather->getWind()
        ]);
    }
}
