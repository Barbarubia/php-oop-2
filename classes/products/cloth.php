<?php
include_once __DIR__ . '/product.php';

class Cloth extends Product
{
    // Attributi addizionali per la classe Cloth
    private $size;

    // Costruttore
    public function __construct($animal, $name, $quantity, $price, $size)
    {
        parent::__construct($animal, $name, $quantity, $price);
        $this->size = $size;
    }

    // Getters & Setters per gli attributi addizionali
    public function getSize()
    {
        return $this->size;
    }
}