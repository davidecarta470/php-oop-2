<?php
class Utente{
  protected $name;
  protected $lastname;
  protected $email;
  protected $numberOfProductsPurchased;
  protected $discount =10;
  function __construct($_name,$_lastname,$_numberOfProductsPurchased)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->numberOfProductsPurchased = $_numberOfProductsPurchased;
  }
  public function getDiscound(){
    if($this->numberOfProductsPurchased > 1){
       
       return "l'utente $this->name $this->lastname ha ricevuto uno sconto del $this->discount% per l'aquisto di $this->numberOfProductsPurchased prodotti<br>";
    }
    return "non sono previsti sconti per l'utente $this->name $this->lastname<br>";
  }
}


