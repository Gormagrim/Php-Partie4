<?php
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function addTest ($numberOneParams = 20, $numberTwoParams = 27, $numberThreeParams = 12) { // Mes paramètres sont initialisés directement dans la déclaration de la fonction.
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
<p><?= addTest () ?></p>

</body>
</html>
