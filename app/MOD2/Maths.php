<?php


namespace App\MOD2;


class Maths
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
