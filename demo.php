<?php
// $chiffre = null;
// $action = (int)readline('Entrez une heure : ');

// while ($chiffre !== 10) {
//   $chiffre = (int)readline('Entrez une heure : ');
// }

// echo 'Bravo vous avez gagné !'

// for ($i = 0; $i <= 100; $i += 2) {
//   echo "- $i \n";
// }

// $notes = [10, 15, 16];

// foreach ($notes as $note) {
//   echo "- $note \n";
// }

// $eleves = [
//   'cm2' => ['Jean', 'Paul', 'Arthur', 'Lucas'],
//   'cm1' => ['Aksel', 'Elio']
// ];

// foreach ($eleves as $class => $listEleves) {
//   echo "Dans la classe de $class il y a \n";
//   foreach ($listEleves as $Eleve) {
//     echo "- $Eleve \n";
//   }
// };

// $notes = [];
// $action = null;

// while ($action !== 'fin')  {
//   $action = readline("Bonjour ! Tapez une note, ou 'fin' pour finir.\n");
//   if ($action !== 'fin') {
//     $notes[] = (int)$action;
//   }
// }

// echo("Voici les notes :\n");
// foreach ($notes as $note) {
//   echo ("- $note \n");
// }







$creneaux = [];

while (true) {
  $debut = (int)readline("Veuillez entrer l'heure d'ouverture\n");
  $fin = (int)readline("Veuillez entrer l'heure de fermeture\n");
  if ($debut >= $fin) {
    echo 'erreur dans le creneau';
  } else {
    $creneaux[] = [$debut, $fin];
    $action = readline("Voulez vous enregistrer un nouveau creneau O/N?\n");
    if ($action ==='N') {
      break;
    } else {

    }
  }
}

$heure = readline('Entrez une heure :\n');
$creneauxTrouve = false;

foreach ($creneaux as $creneau) {
  if ($heure >= $creneau[0] && $heure < $creneau[1]) {
    echo('Le magasin est ouvert !');
  } else {
    echo('Le magasin est fermé !');
}
}
?>
