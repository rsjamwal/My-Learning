<?php

$productName = "laptop";
$productPrice = 50000;
$productQuantity = 2;
$discount = 10; //product disount in percentage

$total = $productPrice * $productQuantity;
$discounntAmount = ($total * $discount) / 100;
$finalAmount = $total - $discount;


echo "Product Name: " . $productName . "\n";
echo "Product Price : " . $productPrice . "\n";
echo "Product Qunatity: " .$productQuantity . "\n";
echo "========================" . "\n";
echo "Total Amount: " . $total . "\n";
echo "=========================" . "\n";
echo "Product Discount:" . $discount . "\n";
echo "Discount Amount:" .$discounntAmount ."\n";
echo "========================" . "\n";
echo "Final Amount: " . $finalAmount . "\n";


