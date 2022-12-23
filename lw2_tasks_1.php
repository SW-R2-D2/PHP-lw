<?php

abstract class PizzaStore
{
    public function orderPizza($type)
    {
        function createPizza($type)
        {
            Pizza::prepare($type);
            Pizza::cut(1);
        }
    }
    abstract function createPizza($type);
}

abstract class Pizza
{
    protected $name;
    protected $sauce1 = "Томатный";
    protected $sauce2 = "Сливочный соус";
    protected $toppings = [
        "aglio1" => "куриное филе",
        "aglio2" => "сливочно-чесночный соус",
        "aglio3" => "шампиньоны",
        "aglio4" => "сыр моцарелла",
        "aglio5" => "и т.д.",
        "marg1" => "помидоры",
        "marg2" => "сыра моцарелла",
        "marg2" => "свежий базилик",
    ];

    function __construct($name, $sauce1, $sauce2, $toppings)
    {
        $this->name = $name;
        $this->sauce1 = $sauce1;
        $this->sauce2 = $sauce2;
        $this->toppings = $toppings;
    }
    public function prepare($type)
    {
        $this->name = $type;
        echo "Началась готовка пицци {$this->name}";
        echo "Добавлен соус {$this->sauce1}";
    }
    public function cut()
    {
    }
}
echo orderPizza("Аглио");
echo PizzaStore::orderPizza("Маргарита");
