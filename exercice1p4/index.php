<?php
$firstName = 'Sebastien';
$secondName = 'Sebastien';
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function boolTest ($firstNameParams, $secondNameParams) // Ma fonction 'test' contient les valeurs des deux variables établies.
{
  if ($firstNameParams == $secondNameParams) { // Ici je fais la condition selon laquelle je vais executer la fontion 'test'.
    return true; // Si mon teste est bon alors il me 'retournera' true.
  }
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 1 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui retourne true. -->
<p><?= boolTest($firstName, $secondName) ?></p> <!-- Je fais un echo de ma fonction 'test' contenant mes 2 variables, et ma fonction est exectuée ici. -->

</body>
</html>
