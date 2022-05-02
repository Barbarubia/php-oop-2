<?php
include_once __DIR__ . '/product.php';

class Toy extends Product
{
    // Costruttore
    public function __construct($animal, $name, $quantity, $price)
    {
        parent::__construct($animal, $name, $quantity, $price);
    }
}