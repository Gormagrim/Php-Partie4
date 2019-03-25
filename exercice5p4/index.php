<?php
$number = 10 ; //Je déclares mes variables vides pour les initialiser
$string = 'ans' ;
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function testConcat ($numberParams, $stringParams) // Ma fonction 'test' contient mes deux variables initialisés plus haut.
{
  return $numberParams . ' ' . $stringParams;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 5 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères
    et qui renvoit la concaténation de ces deux paramètres. -->
    <p>Tu as <?= testConcat ($number, $string) ?></p>
    <p>Tu as <?= testConcat (25, 'ans') ?></p>

</body>
</html>
