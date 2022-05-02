<?php
include_once __DIR__ . '/product.php';

class Food extends Product
{
    // Attributi addizionali per la classe Food
    private $expiration;

    // Costruttore
    public function __construct($animal, $name, $quantity, $price, $expiration)
    {
        parent::__construct($animal, $name, $quantity, $price);
        $this->expiration = $expiration;
    }

    // Getters & Setters per gli attributi addizionali
    public function getExpiration()
    {
        return $this->expiration;
    }
}