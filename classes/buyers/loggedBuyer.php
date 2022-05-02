<?php
include_once __DIR__ . '/buyer.php';

class LoggedBuyer extends Buyer
{
    // Attributi addizionali per la classe LoggedBuyer
    private $dateOfBirth;   // Data di nascita del cliente
    protected $password;    // Password del cliente

    // Costruttore
    public function __construct($name, $surname, $address, $houseNumber, $postalCode , $city, $email, $password, $creditCard, $creditCardExpiration)
    {
        parent::__construct($name, $surname, $address, $houseNumber, $postalCode , $city, $email, $creditCard, $creditCardExpiration);
        $this->password = $password;
    }

    // Getters & Setters per gli attributi addizionali
    public function getPassword()
    {
        return $this->password;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        return $this->dateOfBirth = $dateOfBirth;
    }

    // Applicazione di uno sconto del 20% per i clienti registrati
    protected $discount = 20;
}