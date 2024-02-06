<?php

include "Lib/autoload.php";

$request = new Model_Request();

if(!$request->isPost()) {
	$product = new View_Product();
	echo $product->toHtml();
} else {
	// $product = new Model_Product();
	// $product->save($request->getParams('group1'));
	// print_r();

	$productList = new View_ProductList();
	// echo "Parth";
}