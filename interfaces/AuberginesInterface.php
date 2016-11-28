<?php
interface AuberginesInterface extends ProductInterface
{
    public function setDiscount($discount);
    public function setWeight($weight);
    public function getPrice();
}