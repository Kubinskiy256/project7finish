<?php 


require_once 'vendor/autoload.php';

use Kubinskiy\project2\PizzaStoreOrders;

$pizza = new PizzaStoreOrders();
$pizza->orderPizza("Пицца цезарь");