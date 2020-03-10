<?php
class Libro 
{
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $pagine;
  public $prezzo;
  public $genere;
  private $scaffale;

  public function __construct($_isbn, $_titolo)
  {
    $this->isbn = $_isbn;
    $this->titolo = $_titolo;
  }

  public function getPosition()
  {
    if(empty($this->scaffale)) {
      die('scaffale non inserito');
    }
    return $this->scaffale;
  }

  public function setPosition($_scaffale)
  {
     $this->scaffale = $_scaffale;
  }

  public function getInfo() {
    return [
      $this->isbn,
      $this->titolo,
      $this->autore
    ];
  }

}

