<?php
class Auto {
  public $motore;
  public $cilindrata;
  public $marca;
  public $porte;
  public $targa;
  public $alimentazione;
  public $posti;
  public $kmPerLitro; 

  public function __construct($_marca, $_targa)
  {
    $this->marca = $_marca;
    $this->targa = $_targa;
  }

  public function totalKm($litres) {
    if(empty($this->kmPerLitro)) {
      die('Non hai inserito i km');
    }
    return $this->kmPerLitro * $litres;
  }
}

$panda = new Auto('fiat', 'DV786G7');
// $panda->kmPerLitro = 20;
// echo $panda->totalKm(4);
// $panda->motore = 'Fire';
// $panda->cilindrata = '1100';
// $panda->marca = 'Fiat';
// $panda->porte = 5;
// $panda->targa = 'DV786G7';
var_dump($panda);

$punto = new Auto('fiat', 'HGT67GG');
$punto->motore = 'Boh';
$punto->cilindrata = '1100';
$punto->porte = 3;
$punto->colore = 'rosso';
$punto->kmPerLitro = 10;
echo $punto->totalKm(10);
//var_dump($punto);

// $listaAuto = [
//   $panda,
//   $punto  
// ];

// var_dump($listaAuto);

// foreach ($listaAuto as $thisAuto) {
//   echo $thisAuto->targa;
// }