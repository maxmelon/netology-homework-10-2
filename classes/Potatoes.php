<?php
class Potatoes extends Product implements PotatoesInterface
{
    protected $discount = 10;

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getPrice()
    {
        $finalPrice = $this->price * (1 - $this->discount * 0.01) * $this->weight;
        $this->discountApplied = true;
        return $finalPrice;
    }

}