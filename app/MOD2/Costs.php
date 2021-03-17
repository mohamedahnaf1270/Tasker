<?php


namespace App\MOD2;


class Costs
{
    public function Electicity_charges($whatt , $kWh)
    {
        ($whatt/1000)*$kWh;
    }
}
