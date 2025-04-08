<?php
namespace Kubinskiy\project2;

require_once 'vendor/autoload.php';

use Kubinskiy\project2\Pizza;

class PizzaWithSolyamy extends Pizza
{

    public function __construct(string $name="Пицца пепперония",string $sauce="Острый томатный соус",array $toppings=["пепперони","моцарелла","тесто"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}