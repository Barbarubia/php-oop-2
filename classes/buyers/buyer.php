<?php

// Genero una classe Buyer generica, per chi compra dal sito senza effettuare l'autenticazione
class Buyer
{
    // Attributi della classe
    private $name;          // Nome del compratore
    private $surname;       // Cognome del compratore
    private $address;       // Indirizzo del compratore
    private $houseNumber;   // N. civico del compratore
    private $postalCode;    // Codice Postale del compratore
    private $city;          // Città del compratore
    private $email;         // E-mail del compratore
    private $phone;         // N. di telefono del compratore
    protected $discount = 0;    // Sconto applicabile al compratore, di default pari a zero.

    // Costruttore della classe Buyer
    public function __construct($name, $surname, $address, $houseNumber, $postalCode , $city, $email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->houseNumber = $houseNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->email = $email;
    }

    // Getters & Setters per gli attributi
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }
}