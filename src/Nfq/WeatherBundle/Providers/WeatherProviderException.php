<?php
/**
 * Created by PhpStorm.
 * User: rokasstasys
 * Date: 16/04/16
 * Time: 13:43
 */

namespace Nfq\WeatherBundle\Providers;


use Exception;

class WeatherProviderException extends Exception
{
    /**
     * WeatherProviderException constructor.
     * @param string $msg
     * @param int $code
     * @param Exception|null $ex
     */
    public function __construct($msg, $code = 0, Exception $ex = null)
    {
        parent::__construct($msg, $code, $ex);
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}