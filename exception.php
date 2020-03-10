<?php


class Auto 
{
  public $targa;
  public $marca;

  //per impedire l'aggiunta di nuove proprietas
  public function __set($name, $value)
  {
    throw new Exception('You cant\'t add new property');
  }

  public function setTarga($_targa)
  {
    $this->targa = $_targa;
  }

  public function getTarga()
  {
    return $this->targa;
  }

}

$auto = new Auto();
$auto->setTarga('AD67845');
echo $auto->getTarga();

try {
  $auto->color = 'Red';
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

var_dump($auto);
