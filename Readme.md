### Les Fondamentaux

### jour1 

- 1 - Une classe est une structure qui définit des attributs et des méthodes  représentant un concept du système.
- 2 - Parce qu’une classe sans méthodes ne possède aucun comportement et sert uniquement de conteneur de données.
- 3 - une classe doit avoir une seule responsabilité et Elle ne doit pas mélanger plusieurs logiques différentes

### jour2 

- 1 - DDL (Data Definition Language) : Définir ou modifier la structure de la base de données (les colonnes et les tables ) et DML (Data Manipulation Language) : sert a manipuler les données 
- 2 - Cle Primere : elle permet d'identifier d'une maniere unique un colonne dans le tableau ,elle aide et facilete les relations entre les tables .
- 3 - WHERE permet de sélectionner seulement certaines lignes selon une condition.


### jour3

- 1 - count : calculer le nombre de lignes
 - sum : calculer la somme des valeurs 
- avg : calculer la moyenne des valeurs dans un tableau 
2 - Non : car count(*) compter toutes les lignes mais count(colonne) compter les valeurs non nulle de cette colonne 
3 - Pour  les dates  max(date) donne la date la plus récente et min(date) donne la date le plus ancienne ,Mais dans les chaines de caractere elles se basé sur ordre alphabetique .

### jour4

1 - Classe : un plan / modèle (blueprint)

Objet : une instance concrète de ce plan

2- 	$this : fait référence à l’objet courant.Il permet d’accéder : aux attributs, aux méthodes de l’objet

3 - Le constructeur est une méthode spéciale (magique): appelée automatiquement à la création de l’objet

### jour5

1 - Encapsulation : protéger les données d’un objet pour empêcher les modifications dangereuses et contrôler l’accès aux attributs 

2 - Différence entre public, private, protected c'est : 

public	: accecible partout
private	: seulement dans la classe
protected : classe et dans les classes enfants

3 - Getter : lire une valeur

Setter:  modifier une valeur avec contrôle

### jour6 

1 - L’objet agregee (partie) ne peut pas exister sans le tout (agregat) : Si le tout est détruit donc  les parties sont détruites
	L’objet partie peut exister seul , Le tout disparaît donc la partie reste

3 - C’est une classe placée entre deux classes dans une relation many-to-many, quand la relation a ses propres attributs.

4 - Challenge 1 : Maison — Pièce : COMPOSITION Maison ── 1..* Pièce

	Justification :

	Une pièce n’existe pas sans maison

	Détruire une maison implique détruit les pièces

5 - Challenge 2 : etudiant — Cours : Relation : Association MANY-TO-MANY

Etudiant 1..* ───── 1..* Cours

6 - Un cours existe sans un étudiant et Supprimer un étudiant ne supprime pas le cours et parmit

Si la classe représente un être humain on évite la composition par défaut (bonne pratique de uml )

### jour7 

1 - INNER JOIN	: garde les lignes qui ont une correspondance dans les deux tables , LEFT JOIN : Garde toutes les lignes de la table de gauche, même si aucune correspondance ;

2 - Garde toutes les lignes de la table de droite , même si aucune correspondance 

3 - Oui , On peut joindre plus de deux tables dans une seule requête INNER JOIN / LEFT JOIN / RIGHT JOIN