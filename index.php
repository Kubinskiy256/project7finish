<?php 


require_once 'vendor/autoload.php';

use kubinskiy\project2\PizzaStoreOrders;

$pizza = new PizzaStoreOrders();
$pizza->orderPizza("Пицца цезарь");