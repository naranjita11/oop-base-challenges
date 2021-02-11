<?php

// Create a new class Basket in the App\Shopping namespace and copy across your BasketItem class from the Autoloading challenges. Basket should have an add method which lets you add BasketItems to the basket. It should have a total method that returns the value of all the items' prices. It should have an items method that returns an array of item names.

// Uncomment line 19 of app/Challenges.php to run the following code:

namespace App\Shopping;

use App\Shopping\BasketItem;

class Basket
{
    // we want $items to be a collection not an array so can use a constructor to set this (this is the one use of a constructor outside of passing in the intial arguments)
    private string $item;
    private int $itemsTotal = 0;

    public function add($basketItem)
    {

        // this isn't right...
        $this->itemTypes += $basketItem->type;
        $this->itemTotal += $basketItem->price;
    }


    // public function __constructor()
    // {
    //     set $items up as a collection... 

    // }


    public function total() : string
    {
        $formattedPr = number_format($this->itemsTotal, 2, '.', '');
        return "£{$formattedPr}";
    }

    // map over array using collection method
    public function items()
    {
        
    }


}