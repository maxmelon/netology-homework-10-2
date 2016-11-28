<?php
class Carrots extends Product implements CarrotsInterface
{
    protected $discount = 10;

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getPrice()
    {
        if ($this->weight > 10) {
            $finalPrice = $this->price * (1 - $this->discount * 0.01) * $this->weight;
            $this->discountApplied = true;
            return $finalPrice;
        } else {
            return $this->weight * $this->price;
        }
    }



}