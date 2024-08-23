<?php

class Product
{
    public string $name;
    public int $price;
    public int $quantity;

    public function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class ShoppingCart
{
    public array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void
    {
        $this->products = array_filter($this->products, function ($p) use ($product) {
            return $p->name !== $product->name;
        });
        $this->products = array_values($this->products);
    }

    public function listProducts(): void
    {
        foreach ($this->products as $product) {
            echo "Product: {$product->name}, Price: {$product->price} €, Quantity:{$product->quantity} <br/>";
        }
    }

    public function calculateTotal(): string
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->quantity * $product->price;
        }
        return "Total price: {$total} €";
    }
}

$product1 = new Product('Product 1', 1, 10);
$product2 = new Product('Product 2', 2, 20);
$product3 = new Product('Product 3', 3, 30);
$product4 = new Product('Product 4', 4, 40);

$cart = new ShoppingCart();
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);
$cart->addProduct($product4);
$cart->removeProduct($product4);
$cart->listProducts();
echo $cart->calculateTotal();
