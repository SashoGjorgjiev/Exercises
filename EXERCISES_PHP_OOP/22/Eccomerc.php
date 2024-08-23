<?php

class Order
{
    public $orderID;
    public $customerName;
    public $products = [];
    public $status;

    public function __construct($orderID, $customerName)
    {
        $this->orderID = $orderID;

        $this->status = 'Pending';
    }

    public function placeOrder($products)
    {
        if (!empty($products)) {
            $this->products = $products;
            $this->status = 'Placed';
            echo "Order placed successfully.\n";
        } else {
            echo "Order cannot be placed without products.\n";
        }
    }

    public function cancelOrder()
    {
        if ($this->status !== 'Canceled') {
            $this->status = 'Canceled';
            echo "Order has been canceled.\n";
        } else {
            echo "Order is already canceled.\n";
        }
    }

    public function trackOrder()
    {
        echo "The status of order ID {$this->orderID} is: {$this->status}\n";
    }
}

class Product
{
    public $productID;
    public $productName;
    public $price;

    public function __construct($productID, $productName, $price)
    {
        $this->productID = $productID;
        $this->productName = $productName;
        $this->price = $price;
    }
}

// Create some products
$product1 = new Product(101, 'Laptop', 1200.00);
$product2 = new Product(102, 'Smartphone', 800.00);

// Create an order
$order = new Order(1, 'John Doe');

// Place an order with products
$order->placeOrder([$product1, $product2]);

// Track the order status
$order->trackOrder();

// Cancel the order
$order->cancelOrder();

// Track the order status after cancellation
$order->trackOrder();
