<?php

namespace App;



class Cart
{
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($old_cart)
    {
        if ($old_cart)
        {
            $this->items = $old_cart->items;
            $this->totalPrice = $old_cart->totalPrice;
            $this->totalQty = $old_cart->totalQty;
        }

    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];

        if ($this->items)
        {
            if (array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];

        $this->totalQty++;
        $this->totalPrice += $storedItem['price'];
        $this->items[$id] = $storedItem;
    }
}
