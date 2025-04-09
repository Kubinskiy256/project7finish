<?php

namespace kubinskiy\project2;

require_once 'vendor/autoload.php';

use kubinskiy\project\Pizza;

class PizzaWithCheese extends Pizza {

    public function __construct(string $name="Пицца с сыром",string $sauce="Томатный соус",array $toppings=["Моцаррела","Пармезан"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}