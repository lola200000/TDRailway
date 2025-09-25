<?php
class Passager {
protected string $nom;
protected string $numero;
protected string $train;

protected static array $passagers = [];

public function __construct(string $nom, string $numero, string $train)
{
$this->nom = $nom;
$this->numero = $numero;
$this->train = $train;
}

public function detail(): string
{
return "Passager : {$this->nom} | {$this->numero} | Train assigné : {$this->train}";
}

public static function addPassager(Passager $p): void
{
self::$passagers[] = $p;
}

public static function list(): void
{
foreach (self::$passagers as $p) {
echo $p->detail() . "\n";
}
}

// --- Getters ---
public static function getPassagers(): array { return self::$passagers; }
public function getTrainId(): string { return $this->train; }
public function getNom(): string { return $this->nom; }
}
