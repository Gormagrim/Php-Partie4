<?php
$firstname = 'Sebastien';
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function stringTest ($firstnameParams) // Ma fonction 'test' contient une variable égale à une chaine de caractères.
{
  return $firstnameParams;
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 2 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. -->
<p><?= stringTest($firstname) ?></p> <!-- Je fais un echo de ma fonction 'test' contenant ma chaine de caractère, et ma fonction est exectuée ici.-->

</body>
</html>
