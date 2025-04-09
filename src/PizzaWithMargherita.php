<?php 
namespace kubinskiy\project2;

require_once 'vendor/autoload.php';

use kubinskiy\project\Pizza;

class PizzaWithMarqherita extends Pizza
{

    public function __construct(string $name="Пицца  маргарита",string $sauce="томатный соус",array $toppings=["моцарелла","свежий базелик","тесто","помидоры"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}

