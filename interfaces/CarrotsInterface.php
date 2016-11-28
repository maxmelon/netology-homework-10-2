<?php
interface CarrotsInterface extends ProductInterface
{
    public function setWeight($weight);
    public function getWeight();
    public function getPrice();
}