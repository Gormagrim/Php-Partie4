<?php
$firstNumber = 10 ;
$secondNumber = 100 ;
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function testNumber ($firstNumberParams, $secondNumberParams) {
  if ($firstNumberParams == $secondNumberParams) {
   $result = 'Les deux nombres sont identiques.';
 }else if ($firstNumberParams < $secondNumberParams){
   $result = 'Le premier nombre est plus petit.';
 }else{
   $result = 'Les premier nombre est le plus grand.';
 }
 return $result;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 4 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
      Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
      Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
      Les deux nombres sont identiques si les deux nombres sont égaux -->
<p>Mon premier nombre est égal à <?= $firstNumber ?> et mon second nombre est égal à <?= $secondNumber ?> donc :</p>
<p><?= testNumber($firstNumber, $secondNumber) ?></p>
</body>
</html>
