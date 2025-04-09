<?php
namespace kubinskiy\project2;

require_once 'vendor/autoload.php';

use kubinskiy\project\Pizza;

class PizzaWithSolyamy extends Pizza
{

    public function __construct(string $name="Пицца пепперония",string $sauce="Острый томатный соус",array $toppings=["пепперони","моцарелла","тесто"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}