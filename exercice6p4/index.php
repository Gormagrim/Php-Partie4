<?php
$firstname = 'Jean' ; //Je déclares mes variables vides pour les initialiser
$lastname = 'Dupont' ;
$age = 27 ;
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function testConcat ($firstParams, $secondParams, $thirdParams) // Ma fonction 'test' contient mes deux variables initialisés plus haut.
{
  return 'Bonjour ' . $firstParams . ' ' . $secondParams . ', tu as ' . $thirdParams . ' ans.';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 6 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.
      Elle doit renvoyer une chaine de la forme :
      "Bonjour" + nom + prénom + ",tu as" + age + "ans". -->
<p><?= testConcat ($firstname, $lastname, $age) ?></p>

</body>
</html>
