<?php

namespace App;

class CoffeeShop
{
    protected $products = [];

    public function addProducts($product = [])

    {
        $this->products = $product;
    }
    public function getProducts()

    {
        return $this->products;
    }
    
    
   
    

}