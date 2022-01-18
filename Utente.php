<?php
class Utente{
  public $name;
  public $lastname;
  public $email;
  public $numberOfProductsPurchased;
  public $discount;
  function __construct($_name,$_lastname,$_numberOfProductsPurchased)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->numberOfProductsPurchased = $_numberOfProductsPurchased;
  }
  public function getDiscound(){
    if($this->numberOfProductsPurchased > 1){
       $this->discount = 10;
       return "l'utente $this->name $this->lastname ha ricevuto uno sconto del $this->discount %<br>";
    }
    return "non sono previsti sconti per l'utente $this->name $this->lastname<br>";
  }
}


