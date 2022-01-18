<?php
require_once __DIR__.'/utente.php';

class UtentePremium extends Utente{
  public $extraDiscount =5;
  public $fullDiscount;
  public function getDiscound(){
    if($this->numberOfProductsPurchased > 1){
       $this->discount=10;
       $this->fullDiscount += $this->extradDiscount+$this->discount;
       return "l'utente $this->name $this->lastname ha ricevuto uno sconto del $this->discount% per l'aquisto di $this->numberOfProductsPurchased prodotti, piu' un ulteriore sconto del $this->extraDiscount % per essere un utente premium.Lo sconto totale è pari a $this->fullDiscount<br>";
    }
    return "non sono previsti sconti per l'utente $this->name $this->lastname<br>";
  }
  // public function gerDiscountExtra(){

  // }
  
}
