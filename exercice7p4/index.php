<?php
$gender = 'Relou' ; //Je déclares mes variables vides pour les initialiser
$age = 29 ;
// Je peut déclarer ma fonction en haut et la rappeler plus tard dans le php d'affichage.
function testAgeAndGender ($genderParams, $ageParams) // Ma fonction 'test' contient mes deux variables initialisés plus haut.
{
  if ($genderParams == 'Femme' AND $ageParams > 18 AND $ageParams < 100) {
    echo 'Vous êtes une femme et vous êtes majeur.';
  }else if ($genderParams == 'Femme' AND $ageParams < 18 AND $ageParams > 0) {
    echo 'Vous êtes une femme et vous êtes mineur.';
  }else if ($genderParams == 'Homme' AND $ageParams > 18 AND $ageParams < 100) {
    echo 'Vous êtes un homme et vous êtes majeur.';
  }else if ($genderParams == 'Homme' AND $ageParams < 18 AND $ageParams > 0) {
    echo 'Vous êtes un homme et vous êtes mineur.';
  }else if ($genderParams != 'Femme' AND $genderParams != 'Homme') {
    echo 'Merci d\'entrer un vrai genre ' . $genderParams . ', n\'est pas un genre !';
  }else {
    echo 'Merci d\'entrer votre vrai age ' . $ageParams . ', n\'est pas votre vrai age !';
  }
  return;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 7 Partie 4 php</title>
 </head>
 <body>

<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
      Homme
      Femme
      La fonction doit renvoyer en fonction des paramètres :
        Vous êtes un homme et vous êtes majeur
        Vous êtes un homme et vous êtes mineur
        Vous êtes une femme et vous êtes majeur
        Vous êtes une femme et vous êtes mineur
        Gérer tous les cas. -->
<p>Vous êtes un(e) <?= $gender ?> et vous avez <?= $age ?> ans, donc :</p>
<p><?= testAgeAndGender ($gender, $age) ?></p>

</body>
</html>
