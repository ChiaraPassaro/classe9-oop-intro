<?php
// include 'classes/Libro.php';

// $ombraDelloScorpione = new Libro('122334uu04', 'Ombra Dello Scorpione');
// $ombraDelloScorpione->setPosition('10B');
// echo $ombraDelloScorpione->getPosition();
// var_dump($ombraDelloScorpione->getInfo());

require_once 'classes/Stanza.php';
require_once 'classes/Superior.php';

$stanzaSingola = new Stanza([12,2,2], 1);
$stanzaSingola->prezzo = 40;
echo $stanzaSingola->getNumeroStanza();
$stanzaSingola->setNumeroStanza([12, 2, 2]);
echo $stanzaSingola->getNumeroStanza();
// var_dump($stanzaSingola);

// $stanzaSuperior = new Superior('400', 4, 2, 10);var_dump(get_class_methods(new Superior('400', 4, 2, 10)));


// $stanzaSuperior->prezzo = 300;
// $stanzaSuperior->ospiti = 'Pinco Pallo';
// echo $stanzaSuperior->calcPrice(3);
// echo $stanzaSuperior->getOspiti();
// var_dump($stanzaSuperior);

// GetPosition();