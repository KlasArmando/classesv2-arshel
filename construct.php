<?php
class Product{
    public $name;
    public $price;


    public function __construct($name, $price)
    {
    $this->name = $name;
    $this->price = $price;
    }


}

$product1 = new Product('iphone', 1050);
var_dump($product1);

class Customer{
    public $name2;
    public $age;
    public $clientid;


    public function __construct($name2, $age, $clientid)
    {
        $this->name2 = $name2;
        $this->age = $age;
        $this->clientid = $clientid;
    }


}

$client1 = new Customer('arshel', 20, 12);
var_dump($client1);