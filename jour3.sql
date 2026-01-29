
/* chalenge 1 */

select count(*) as nb_total_cmd
from commandes;

/* chalenge 2 */

select avg(prix) as prix_moyen
from produits;

/* chalenge 3 */

select max(montant) as montant_plus_chere
from commandes;