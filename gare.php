<?php
require_once __DIR__ . '/train.php';
require_once __DIR__ . '/passager.php';

class Gare {
public static function afficherInfo(): void {
$trains = Train::getTrains();
$passagers = Passager::getPassagers();

echo ">> INFORMATIONS DE LA GARE : \n";

foreach ($trains as $train) {
echo "=== " . $train->detail() . " ===\n";
$id = $train->getId();

$liste = array_filter($passagers, function (Passager $p) use ($id) {
return $p->getTrainId() === $id;
});

if (count($liste) > 0) {
foreach ($liste as $p) {
echo " - Passager : " . $p->getNom() . "\n";
}
} else {
echo " Aucun passager assigné.\n";
}

echo "\n";
}
}
}

