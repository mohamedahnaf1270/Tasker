<?php


namespace App\modules;


class Tax extends Math
{
    public function __construct($tax)
    {
        $this->taxrate =$tax;
    }

    public function withgst($amount)
    {
        return $this->percentage($amount, $this->taxrate);
    }

}
