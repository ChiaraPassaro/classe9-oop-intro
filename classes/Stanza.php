<?php
require_once __DIR__ . '/../traits/GetPosition.php';

class Stanza 
{
  use GetPosition;
  protected $numeroStanza;
  public $piano;
  public $letti;
  public $prezzo;
  public $ospiti;

  public function __construct($_numeroStanza, $_piano, $_letti = 1)
  {
    if (!is_int($_numeroStanza)) {
      die('non e un numero');
    }
    $this->numeroStanza = $_numeroStanza;
    $this->piano = $_piano;
    $this->letti = $_letti;
  }

  public function calcPrice($_giorni) {
    if(empty($this->prezzo)) {
      die('Non hai messo il prezzo');
    }
    return $this->prezzo * $_giorni;
  }

  public function getOspiti() 
  {
    return $this->ospiti;
  }

  public function setNumeroStanza($_numeroStanza) {
    if(!is_int($_numeroStanza)) {
      die('non e un numero');
    }

    $this->numeroStanza = $_numeroStanza;
  }

  public function getNumeroStanza() {
    return $this->numeroStanza;
  }

}