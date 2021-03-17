<?php


namespace App\modules;


class Math
{
    public function addition($a , $b)
    {
        return $a + $b;
    }

    public function subtraction($a , $b)
    {
        return $a - $b;

    }

    public function multiplication($a , $b)
    {
        return $a * $b;
    }

    public function division($a , $b)
    {
        return $a / $b;
    }

    public function percentage($amount , $percent)
    {
        return $amount * $percent /100;
    }
}
