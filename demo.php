<?php
// $nom = 'Doe';

//   function bonjour ($prenom = null) {
//     global $nom;
//     if ($prenom == null) {
//       return "Bonjour\n";
//     }
//     return 'Bonjour ' . $prenom . " " . "$nom" . "\n";
//   }

// echo bonjour('Jean');


// function repondre_oui_non($phrase) {
//   $answer = readline("$phrase si oui tapez 'o', sinon tapez 'n' \n");
//   if ($answer === 'o') {
//     return true;
//   } if ($answer === 'n') {
//     return false;
//   } else {
//     return repondre_oui_non('Voulez vous continuer ?');
//   }
// }

// $resultat = repondre_oui_non('Voulez vous continuer ?');
// var_dump($resultat);



function demander_creneau($phrase = 'Veuillez entrer un creneau') {
  echo $phrase . "\n";
  while (true) {
    $ouverture = (int)readline("Veuillez entrer l'heure d'ouverture : ");
    if ($ouverture >= 0 && $ouverture <= 23) {
      break;
    }
  }
  while (true) {
    $fermeture = (int)readline("Veuillez entrer l'heure de fermeture : ");
    if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
      break;
    }
  }
  return [$ouverture, $fermeture];
}

$creneau = demander_creneau();

var_dump($creneau)
?>
