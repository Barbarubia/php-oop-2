<?php

// Genero una classe astratta (non può essere creato un oggetto con questa classe) che contiene gli attributi comuni a tutti i prodotti
abstract class Product
{
    // Attributi della classe
    private $animal;        // Specifica la categoria di animale a cui è rivolto il prodotto
    private $name;          // Nome del prodotto
    protected $description; // Descrizione del prodotto
    private $quantity;      // Quantità disponibile del prodotto
    private $price;         // Prezzo del prodotto

    // Costruttore che richiede obbligatoriamente animale, nome, quantità e prezzo del prodotto
    public function __construct($animal, $name, $quantity, $price)
    {
        $this->animal = $animal;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // Getters & Setters per gli attributi
    public function getAnimal()
    {
        return $this->animal;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }
}