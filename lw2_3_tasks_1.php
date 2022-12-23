<?php

abstract class PizzaStore
{
    protected string $name;
    public function orderPizza(Pizza $type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare()->cut();
    }

    public abstract function createPizza(Pizza $type): Pizza;
}

class Pizza
{
    private string $name = '';
    private string $sauce = '';
    private array $toppings = [];

    public function __construct(string $name, string $sauce, array $toppings)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function createPizza()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'Соус томатный';
        $this->toppings = ['Помидоры'];
    }

    public function prepare(): self
    {
        $toppingsString = '';
        foreach ($this->toppings as $topping) {
            $toppingsString += "$topping\n";
        }
        print("Началась готовка пиццы {$this->name}");
        print("Добавлен соус {$this->sauce}");
        print("Добавлены топики:\n {$toppingsString}");
        return $this;
    }

    public function cut(): self
    {
        print('Данную пиццу нарезают по диагонали.');
        return $this;
    }
}
