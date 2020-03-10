<?php
require_once 'Stanza.php';
require_once __DIR__ . '/../traits/GetPosition.php';

class Superior extends Stanza 
{
  use GetPosition;
  public $optionalPrice;

  public function __construct($_numeroStanza, $_piano, $_letti = 1, $_optionalPrice)
  {
    parent::__construct($_numeroStanza, $_piano, $_letti);
    $this->optionalPrice = $_optionalPrice;

  }

  public function calcPrice($_giorni)
  {
    if (empty($this->prezzo)) {
      die('Non hai messo il prezzo');
    } 
    elseif(empty($this->optionalPrice)) {
      die('Non hai messo il prezzo optional');
    }
    return $this->prezzo * $_giorni * $this->optionalPrice;
  }
}