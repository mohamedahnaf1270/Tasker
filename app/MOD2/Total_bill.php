<?php


namespace App\MOD2;


interface Total_bill
{
    public function calculate($type , $time , $TC , $fixed_cost);
}
