<?php
// Example product data structure for reference
$products = [
    ['name' => 'Product 1', 'price' => 100, 'discount' => 10, 'quantity' => 2],
    ['name' => 'Product 2', 'price' => 200, 'discount' => 20, 'quantity' => 1],
];

$totalPrice = 0;
$totalItems = 0;
$totalSavings = 0;

foreach ($products as $product) {
    $productPrice = $product['price'];
    $productQuantity = $product['quantity'];
    $productDiscount = $product['discount'];
    
    $totalItems += $productQuantity;
    $totalPrice += $productPrice * $productQuantity;
    $totalSavings += ($productDiscount * $productQuantity);
}
?>
