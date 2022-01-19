<?php
class PremiumGold{
  private $name;
  private $lastname;
  private $subscriptionNumber;
  function __construct($_name,$_lastname,$_subscriptionNumber)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->subscriptionNumber = $this->checkValidNumber($_subscriptionNumber);
  }

  private function checkValidNumber($_subscriptionNumber){
    if(!is_int($_subscriptionNumber) || strlen($_subscriptionNumber) != 6){
      throw new Exception("numero carta di credito non valido");
    }
     return $_subscriptionNumber;
  }
}