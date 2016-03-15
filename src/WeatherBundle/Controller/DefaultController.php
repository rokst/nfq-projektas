<?php

namespace WeatherBundle\Controller;

use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/orai/{city}")
     * * @Route("/orai/")
     */

    public function indexAction($city="Vilnius")
    {
        $client = new Client([

            // Base URI is used with relative requests
            'base_uri' => 'http://api.openweathermap.org/data/2.5/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
            ]);

        $API =$this->container->getParameter('api-weather');

        $response = $client->request('GET', 'weather?q='.$city.'&appid='.$this->container->getParameter('api-weather').'&units=metric');

        $string = $response -> getBody();

        $json = json_decode($string,true);

        $temp = $json["main"]["temp"];
        $name = $json ['name'];
        $wind = $json ['wind']['speed'];

        return $this->render('WeatherBundle:Default:index.html.twig', [
            "temp" => $temp,
            "name" => $name,
            "wind" => $wind
        ]);
    }
}
