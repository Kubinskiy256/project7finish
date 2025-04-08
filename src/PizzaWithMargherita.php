<?php 
namespace Kubinskiy\project2;

require_once 'vendor/autoload.php';

use Kubinskiy\project2\Pizza;

class PizzaWithMarqherita extends Pizza
{

    public function __construct(string $name="Пицца  маргарита",string $sauce="томатный соус",array $toppings=["моцарелла","свежий базелик","тесто","помидоры"])
    {
        parent::__construct($name, $sauce, $toppings);
    }
}

