

CREATE TABLE produits (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL ,
    stock INT NOT NULL 
);
// 2 - 
insert into Produits (nom,prix,stock) values  ('produit1', 7500.00, 5),
											  ('produit2', 180.00, 20),
											   ('produit3', 450.00, 10);

// 3 - 
UPDATE produits
SET prix = prix * 1.10
WHERE nom = 'produit1';

//4- 

delete from produits where stock=10;

