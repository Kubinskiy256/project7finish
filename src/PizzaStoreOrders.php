<?php
namespace Kubinskiy\project2;;

require_once 'vendor/autoload.php';

use Kubinskiy\project\Pizza;
use Kubinskiy\project\PizzaStore;
use Kubinskiy\project2\PizzaWithPepperoni;
use Kubinskiy\project2\PizzaWithCheese;
use Kubinskiy\project2\PizzaWithMarqherita;

class PizzaStoreOrders extends PizzaStore{

    public array $speciesPizza=["Пицца  пепперониий", "Пицца  маргарита", "Пицца с сыром"];

    public function createPizza(string $type): Pizza
    {
        if ($type === "Пицца  пеппероний") {
            $newPizza1 = new PizzaWithPepperoni();
            return $newPizza1;
        }

        if ($type === "Пицца маргарита") {
            $newPizza2 = new PizzaWithMarqherita();
            return $newPizza2;
        }

        if ($type === "Пицца с сыром ") {
            $newPizza3 = new PizzaWithShaurma();
            return $newPizza3;
        }

        if ($type === "Пицца цезарь") {
            $newPizza4 = new Pizza($type,"белый соус на основе майонеза",["Сыр моцарелла","Куриное филе","Помидоры черри","Пекинская капуста"]);
            return $newPizza4;
        }

        $i=0;
        foreach($this->speciesPizza as $speciePizza){
            if ($type===$speciePizza){
                $i=$i+1;
            }
        }
        if ($i===0){
            echo 'такой пиццы нет';   
        }
        $i=0;

        exit;
    }

}