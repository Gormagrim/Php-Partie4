<?php
$gender = 'Femme' ;
$age = 20 ;
function testAgeAndGender ($genderParams, $ageParams) { // Ma fonction 'test' contient mes deux variables initialisés plus haut.
  if ($genderParams == 'Femme' && $ageParams > 18 && $ageParams < 100) {
    $result = 'Vous êtes une femme et vous êtes majeur.';
  }else if ($genderParams == 'Femme' && $ageParams < 18 && $ageParams > 0) {
    $result = 'Vous êtes une femme et vous êtes mineur.';
  }else if ($genderParams == 'Homme' && $ageParams > 18 && $ageParams < 100) {
    $result = 'Vous êtes un homme et vous êtes majeur.';
  }else if ($genderParams == 'Homme' && $ageParams < 18 && $ageParams > 0) {
    $result = 'Vous êtes un homme et vous êtes mineur.';
  }else if ($genderParams != 'Femme' && $genderParams != 'Homme') {
    $result = 'Merci d\'entrer un vrai genre ' . $genderParams . ', n\'est pas un genre !';
  }else {
    $result = 'Merci d\'entrer votre vrai âge, ' . $ageParams . ' ans n\'est pas votre vrai âge !';
  }
  return $result;
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
