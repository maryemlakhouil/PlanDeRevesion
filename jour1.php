<?php

// 1 - Une classe est une structure qui définit des attributs et des méthodes  représentant un concept du système.

// 2- Parce qu’une classe sans méthodes ne possède aucun comportement et sert uniquement de conteneur de données.

// 3- une classe doit avoir une seule responsabilité et Elle ne doit pas mélanger plusieurs logiques différentes


/****************
 * Chalenges
*****************/

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

// 3 - L’inscription est une action fait par l’étudiant donc on placer dans la classe etudiant 

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
