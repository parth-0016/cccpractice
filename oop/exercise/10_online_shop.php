<?php

class Product{
    private $productID;
    private $name;
    private $price;

    public function __construct($productID, $name, $price){
        $this->productID = $productID;
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
    public function display(){
        echo "Product Id: {$this->productID}, Product Name: {$this->name}, Product Price: {$this->price} <br>";
    }
}

class ShoppingCart{
    private $items = [];
    public function addProduct(Product $product){
        $this->items[] = $product;    
    }

    public function totalPrice(){
        $totalPrice = 0;
        foreach($this->items as $item){
            $totalPrice += $item->getPrice(); 
        }
        return $totalPrice;
    }

    public function displayCart(){
        foreach($this->items as $item){
            // print_r($item);
            // echo "<br>";
            $item->display();
        }
    }
}

$product1 = new Product(1,'aaa',90);
$product2 = new Product(2,'bbb',30);
$product3 = new Product(3,'ccc',70);

$cart = new ShoppingCart();

$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);

$total = $cart->totalPrice();
echo $total.'Rs <br>';

$cart->displayCart();

?>