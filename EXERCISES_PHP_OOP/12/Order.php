<?php

class Order
{
    public $products = [];
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price;
        }
        return 'Total price:' . ' ' . $total . '€';
    }

    public function listProducts()
    {
        foreach ($this->products as $product) {
            echo $product->name . ' - ' . $product->price . '€' . '<br/>';
        }
    }
}
