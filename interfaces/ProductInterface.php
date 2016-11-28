<?php
interface ProductInterface
{
    public function __construct($name, $price);
    public function getPrice();
    public function getDeliveryCosts();
    public function showPriceAsList($weight);
}