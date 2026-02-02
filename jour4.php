<?php

class Voiture {
    public string  $marque;
    public string $modele;
    public int $vitesse;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = 0;
    }

    public function accelerer() {
        $this->vitesse += 10;
    }
}

$v1 = new Voiture("Toyota", "cc");
$v2 = new Voiture("BMW", "vv");

$v1->accelerer();
$v1->accelerer();

$v2->accelerer();

echo $v1->vitesse; 
echo $v2->vitesse; 