<?php
class Calculator
{
    private float $result = 0.0;
    public function sum(float $sum): self
    {
        $this->result += $sum;
        return $this;
    }
    public function minus(float $minus): self
    {
        $this->result -= $minus;
        return $this;
    }
    public function product(float $product): self
    {
        $this->result *= $product;
        return $this;
    }
    public function division(float $division): self
    {
        if ($division !== 0.0) {
            $this->result /= $division;
        } else {
            $this->result = 0.0;
        }
        return $this;
    }
    public function getResult(): string
    {
        return $this->result;
    }
}

$calculator = new Calculator();

echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();
