<?php

require_once('Product.php');
require_once('Order.php');


$order = new Order();
$product = new Product('Jacket', 10);
$product2 = new Product('Pants', 5);
$product3 = new Product('Shoes', 45);

$order->addProduct($product);
$order->addProduct($product2);
$order->addProduct($product3);
$order->listProducts();

echo $order->calculateTotal();
