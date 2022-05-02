<?php
include_once __DIR__ . '/classes/products/accessory.php';
include_once __DIR__ . '/classes/products/cloth.php';
include_once __DIR__ . '/classes/products/food.php';
include_once __DIR__ . '/classes/products/health.php';
include_once __DIR__ . '/classes/products/toy.php';

/*
esercizio di oggi:
nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

// PROVA
$cassetta = new Accessory('Gatti', 'Cassetta per lettiera mod.03', 5, '19,99€');
$cassetta->setDescription('Cassetta per lettiera gatti di dimensioni L60 x P40 x H25 cm');

$pettorina = new Cloth('Cani', 'Pettorina mod.09', 3, '14,99€', 'Small');
$pettorina->setDescription('Pettorina per cani di piccola taglia');

$croccantini = new Food('Cani', 'CroccanBau Manzo 80g', 10, '1,09€', '31-12-2022');
$croccantini->setDescription('Confezione da 80g di croccantini al manzo per cani');

$antiparassitario = new Health('Cani', 'Viapulciezecche Spray 500ml', 15, '9,99€', '15-09-2023');
$antiparassitario->setDescription('Spray antiparassitario per cani in bottiglia da 500ml');

$frisbee = new Toy('Cani', 'Frisbee mod.B4', 15, '3,99€');
$frisbee->setDescription('Frisbee giocattolo per cani diametro 20cm');


var_dump($cassetta);
var_dump($pettorina);
var_dump($croccantini);
var_dump($antiparassitario);
var_dump($frisbee);