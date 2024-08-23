<?php

class Product
{

    public string $productName;
    public int $productId;
    public int $price;

    public function __construct(string $productName, int $productId, int $price)

    {
        $this->productName = $productName;
        $this->productId = $productId;
        $this->price = $price;
    }
}

class ProductInventory
{
    public array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void
    {
        $this->products = array_filter($this->products, function ($p) use ($product) {
            return $p->productId !== $product->productId;
        });
    }

    public function listProducts(): void
    {
        foreach ($this->products as $product) {
            echo "Product ID: {$product->productId}, Name: {$product->productName}, Price: {$product->price} €\n";
        }
    }

    public function calculateTotalValue(): int
    {
        $totalValue = 0;
        foreach ($this->products as $product) {
            $totalValue += $product->price;
        }
        return  $totalValue;
    }
}

$product1 = new Product('Product 1', 1, 10);
$product2 = new Product('Product 2', 2, 20);
$product3 = new Product('Product 3', 3, 30);
$product4 = new Product('Product 4', 4, 40);

$inventory = new ProductInventory();
$inventory->addProduct($product1);
$inventory->addProduct($product2);
$inventory->addProduct($product3);
$inventory->addProduct($product4);
$inventory->removeProduct($product4);
$inventory->listProducts();
echo 'Total: ' . $inventory->calculateTotalValue();
