<?php
interface PotatoesInterface extends ProductInterface
{
    public function setDiscount($discount);
    public function setWeight($weight);
    public function getPrice();
}