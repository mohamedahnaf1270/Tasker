<?php


namespace App\modules;


class Items extends Tax
{
    public function item_price($total)
    {
        $this->addition($this->withgst + $total);
    }
}
