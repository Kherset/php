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


function repondre_oui_non($phrase) {
  $answer = readline("$phrase si oui tapez 'o', sinon tapez 'n' \n");
  if ($answer === 'o') {
    return true;
  } if ($answer === 'n') {
    return false;
  } else {
    return repondre_oui_non('Voulez vous continuer ?');
  }
}

$resultat = repondre_oui_non('Voulez vous continuer ?');
var_dump($resultat);
?>
