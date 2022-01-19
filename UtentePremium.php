<?php
require_once __DIR__.'/utente.php';

class UtentePremium extends Utente{
  protected $extraDiscount ;
  protected $fullDiscount;
  private $premiumCard;
  function __construct($_name,$_lastname,$_numberOfProductsPurchased)
  {
    parent::__construct($_name,$_lastname,$_numberOfProductsPurchased);
    $this->extraDiscount = 10;
  }
  public function getDiscound(){
    if($this->numberOfProductsPurchased > 1){
      
       $this->fullDiscount = $this->extraDiscount + $this->discount;
       return "l'utente $this->name $this->lastname ha ricevuto uno sconto del $this->discount% per l'aquisto di $this->numberOfProductsPurchased prodotti, piu' un ulteriore sconto del $this->extraDiscount % per essere un utente premium.Lo sconto totale è pari a $this->fullDiscount %<br>";
    }
    return "non sono previsti sconti per l'utente $this->name $this->lastname<br>";
  }


  //assegnazione della carta premium gold
  public function setPremiumCard($_name,$_lastname,$_subscriptionNumber){
    if($_name == $this->name &&$this->lastname == $_lastname){
      try {
        $this->premiumCard = new PremiumGold($_name,$_lastname,$_subscriptionNumber);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }else{
      throw new Exception("utente premium non valido");
    }
  }

  
}
    
    
