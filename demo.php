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

$eleves = [
  'cm2' => ['Jean', 'Paul', 'Arthur', 'Lucas'],
  'cm1' => ['Aksel', 'Elio']
];

foreach ($eleves as $class => $listEleves) {
  echo "Dans la classe de $class il y a \n";
  foreach ($listEleves as $Eleve) {
    echo "- $Eleve \n";
  }
};
?>
