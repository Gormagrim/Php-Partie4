<?php
$numberOne = 20 ; //Je déclares mes variables vides pour les initialiser
$numberTwo = 27 ;
$numberThree = 12;
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function addTest ($numberOneParams, $numberTwoParams, $numberThreeParams) // Ma fonction 'test' contient mes deux variables initialisés plus haut.
{
  return $numberOneParams + $numberTwoParams + $numberThreeParams;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 8 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
      Tous les paramètres doivent avoir une valeur par défaut. -->
<p>La somme de <?= $numberOne ?> + <?= $numberTwo ?> + <?= $numberThree ?> = <?= addTest ($numberOne, $numberTwo, $numberThree) ?></p>

</body>
</html>
