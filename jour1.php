<?php
// 1 - cette classe ne contient aucune methode 
// 2 - 
class Livre {
    private string $titre;
    private string $auteur;
    private string $isbn;
    private bool $estEmprunte = false;

    public function __construct($titre, $auteur, $isbn) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->isbn = $isbn;
    }

    public function emprunter() {
        if (!$this->estEmprunte) {
            $this->estEmprunte = true;
            echo "Livre emprunté";
        } else {
            echo "Le livre est déjà emprunte";
        }
    }

    public function retourner() {
        if ($this->estEmprunte) {
            $this->estEmprunte = false;
            echo "Livre retournee";
        } else {
            echo "Le livre n'est pas emprinte";
        }
    }

    public function afficherDetails() {
        echo "Titre : {$this->titre}<br>";
        echo "Auteur : {$this->auteur}<br>";
        echo "ISBN : {$this->isbn}<br>";
    }
}

// 3 - 

class Cours {
    public $nom;
    public $etudiants = [];

    public function __construct($nom) {
        $this->nom = $nom;
    }
}

class Etudiant {
    public $nom;
    public $cours = [];

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function inscriptionAuCours(Cours $cours) {
        
    }
}
