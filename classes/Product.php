<?php
abstract class Product implements ProductInterface
{
    protected $name;
    protected $price;
    protected $discount;
    protected $discountApplied = false;
    protected $weight;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function getPrice();

    public function getDeliveryCosts()
    {
        if ($this->discountApplied == true) {
            return 300;
        } else {
            return 250;
        }
    }

    public function showPriceAsList($weight) {
            $this->weight = $weight;
            echo '<ul type="circle">';
            echo "<h3>$this->name</h3>";
            echo 'Цена за кг: ' . $this->price . '<br>';
            echo 'Цена всего: ' . $this->getPrice(). '<br>';
            $showDiscount = $this->discountApplied == true ? $this->discount : '0';
            echo 'Скидка: ' . $showDiscount . '%' . '<br>';
            echo 'Цена за доставку: ' . $this->getDeliveryCosts(). '<br>';
            echo '</ul>';
    }
}