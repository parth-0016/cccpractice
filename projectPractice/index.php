<?php

include "Lib/autoload.php";

// class Ccc
// {
// 	public static function init()
// 	{
// 		// echo "123<br>";
// 		// $frontControllerObj = new Controller_Front();
// 		// $frontControllerObj->init();
// 	}
// }
// // Ccc::init();

// // $uriObject = new Model_Request();
// // $uriObject->requestUri();
// $request = new Model_Request();
// $queryBuilder = new Lib_Sql_Query_Builder();
// if (!$request->isPost()) {
// 	$product = new View_Product();
// 	echo $product->toHtml();
// } else {
// 	// $product = new Model_Product();
// 	// $product->save($request->getParams('group1'));
// 	// print_r();

// 	$productList = new View_Product_List();
// 	if ($request->getQueryData('edit')) {
// 		$key = $_GET['edit'];
// 		echo $product->toHtml();
// 		if (isset($_POST['update'])) {
// 			$product_data = $_POST['group1'];
// 			$updQuery = $queryBuilder->updateQuery('ccc_product', $product_data, ['product_id' => $key]);
// 			// echo $updQuery;
// 			$queryBuilder->executeQuery($updQuery);
// 			$editRowQuery = $queryBuilder->selectQuery('ccc_product', '*', ['product_id' => $request->getParams('product_id')]);
// 			$row = $queryBuilder->fetchRowData($editRowQuery);
// 			header("Location: Product");
// 		} elseif (isset($_GET['delete'])) {

// 		}
// 	}
// 	// 	// echo "Parth";
// }