<?php
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function Concat ($firstName, $secondName) {
  return $firstName . $secondName ; // Ici je dis que je souhaite les concaténer.
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 3 Partie 4 php</title>
</head>
<body>

  <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines -->
  <p>Si je fais une concaténation de Seb et de astien, j'obtiens : <?= Concat('Seb' , 'astien') ?></p> <!-- J'execute ma fonction test avec des chaines de caractères en paramètres. -->

</body>
</html>
