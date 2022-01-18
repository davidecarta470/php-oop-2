<?php
require_once __DIR__.'/Utente.php';
require_once __DIR__.'/UtentePremium.php';
$utente1 = new Utente("Mario","Rossi",4);
$utente2 = new UtentePremium("Giuseppe","Verdi",2);

var_dump($utente1);
var_dump($utente2);

echo $utente1->getDiscound();
echo $utente2->getDiscound();




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