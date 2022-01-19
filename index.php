<?php
require_once __DIR__.'/Utente.php';
require_once __DIR__.'/UtentePremium.php';

require_once __DIR__.'/PremiumGold.php';

//assegnazione utente 1 con 0 acquisti
$utente1 = new Utente("Mario","Rossi",0);

//assegnazione utente premium con 2 acquisti 
$utentePremium = new UtentePremium("Giuseppe","Verdi",2);


//visualizzazion utente 1
var_dump($utente1);

//visualizzazione utentePremium
var_dump($utentePremium);

//assegnazione numero carta gold ad utente Premium e visualizzazione
//in caso in cui il nome è sbagliato da un errore
$utentePremium->setPremiumCard("Giuseppe","Verdi",345667);

//visualizzazione utente premium con assegnazione del numero di carta Premium Gold
var_dump($utentePremium);
//messaggio di info sugli sconti applicati all'utente 1
echo $utente1->getDiscound();

//messaggio di info sugli sconti applicati all'utente Premium
echo $utentePremium->getDiscound();







?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>