<?php


namespace App\MOD2;


class Express
{
    public function __construct($whatt, $kWh)
    {
        $this->electricity_costs=($whatt/1000)*$kWh;
    }

    public $type = ["FCL","REEFER","NORMAL","LCL"];
    public function calculate($type , $time)
    {
        if($type==FCL){
            $fixed_cost=2000;
        }
        elseif($type==REEFER){
            $fixed_cost=2500+$this->electricity_costs;
        }
        elseif($type==NORMAL){
            $fixed_cost=1500;
        }
        elseif($type==LCL){
            $fixed_cost=1000;
        }

            if($time<=72){
                $variable_cost=1000;
            }
            else{
                $variable_cost=250;
            }
            $TC=$fixed_cost+$variable_cost;
    }
}
