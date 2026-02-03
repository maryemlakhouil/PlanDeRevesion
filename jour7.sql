/* chalenge 1 */

SELECT co.id AS commande_id, c.nom AS client_nom
FROM Commandes co
INNER JOIN Clients c ON co.client_id = c.id;

/* chalenge 2 */

SELECT c.nom AS client_nom, co.montant AS montant_commande
FROM Clients c
LEFT JOIN Commandes co ON c.id = co.client_id;


/* chalenge 3 */ 

SELECT c.nom AS nom_client,p.nom AS nom_produit,lc.quantite
FROM Clients c
INNER JOIN Commandes co ON c.id = co.client_id
INNER JOIN Lignes_Commandes lc ON co.id = lc.commande_id
INNER JOIN Produits p ON lc.produit_id = p.id;
