<?php
require_once __DIR__ . '/bred/train.php';
require_once __DIR__ . '/bred/passager.php';
require_once __DIR__ . '/bred/gare.php';

// --- Création des trains ---
$train1 = new Train('1', 'Barcelone', '12h00', 'A');
$train2 = new Train('2', 'Madrid', '10h00', 'B');
$train3 = new Train('3', 'Paris', '14h30', 'C');

Train::addTrain($train1);
Train::addTrain($train2);
Train::addTrain($train3);

// --- Création des passagers ---
$p1 = new Passager('Pedri', 'Billet n°101', '1');
$p2 = new Passager('Gavi', 'Billet n°102', '1');
$p3 = new Passager('Rodrigo', 'Billet n°103', '2');

Passager::addPassager($p1);
Passager::addPassager($p2);
Passager::addPassager($p3);

// --- Affichage ---
Train::list();
echo "\n";
Passager::list();
echo "\n";
Gare::afficherInfo();

//Gare::setPlat([
  //  '1' => 'A',
  //  '2' => 'B',
  //  '3' => 'C',
//]);

//Gare::afficherInfo();




?>
