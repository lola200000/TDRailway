<?php
class Train {
protected string $idTrain;
protected string $destination;
protected string $hDepart;
protected string $plateforme;

protected static array $trains = [];

public function __construct(string $idTrain, string $destination, string $hDepart, string $plateforme)
{
$this->idTrain = $idTrain;
$this->destination = $destination;
$this->hDepart = $hDepart;
$this->plateforme = $plateforme;
}

public function detail(): string
{
return "Train n°{$this->idTrain} | Destination : {$this->destination} | Départ : {$this->hDepart} | Plateforme : {$this->plateforme}";
}

public static function addTrain(Train $train): void
{
self::$trains[] = $train;
}

public static function list(): void
{
foreach (self::$trains as $train) {
echo $train->detail() . "\n";
}
}

// --- Getters ---
public static function getTrains(): array { return self::$trains; }
public function getId(): string { return $this->idTrain; }
public function getDestination(): string { return $this->destination; }
public function getDepart(): string { return $this->hDepart; }
public function getPlateforme(): string { return $this->plateforme; }
}
?>