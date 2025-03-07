<?php
$data = array(
	array("product" => "Shirt", "price" => 20),
	array("product" => "Pants", "price" => 30),
	array("product" => "Dress", "price" => 40)
);

function get_products() {
	global $data;
	return $data;
}

$products = get_products();
foreach($products as $product) {
	echo $product["product"] . " : " . $product["price"] . "<br>";
}
?>