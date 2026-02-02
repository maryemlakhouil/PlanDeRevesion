<?php

class Voiture {
    private $vitesse = 0;

    public function getVitesse() {
        return $this->vitesse;
    }

    public function setVitesse(int $v) {
        if ($v >= 0) {
            $this->vitesse = $v;
        }
    }

    public function accelerer() {
        $this->vitesse += 10;
    }
}

class CompteBancaire {
    private $solde ;

    public function deposer(float $montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function retirer(float $montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        }
    }

    public function getSolde() {
        return $this->solde;
    }
}

$compte = new CompteBancaire();
$compte->deposer(500);
$compte->retirer(200);

echo $compte->getSolde(); 
