<?php
$action = (int)readline('Entrez votre action : (1: Attaquer, 2: Defendre, 3: Passer son tour');

switch ($action) {
  case 1:
    echo "J'attaque";
    break;
  case 2:
    echo "Je defends";
    break;
  case 3:
    echo "Je passe mon tour";
    break;
    default:
  echo "commande inconnue";
}
?>
