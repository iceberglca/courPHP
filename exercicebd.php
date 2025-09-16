<!DOCTYPE html>
<html>

<head>
    <title>page de presentation</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;

        }

        th td {
            padding: 15px;
            text-align: center;
            /* Centrer le texte horizontalement */
            vertical-align: middle;
            /* Centrer le texte verticalement */
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 50px;
            text-align: center;
        }


        }
    </style>
</head>

<body>
    <table border="3">
        <center>
            <h1> EXERCICE DE BASE DE DONNEE</h1>
        </center>

        <tr>
            <th>Exercice 1</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>exécuter tout les scripts portant le nom des tables dans la base de donnée gestionap
                </p>
            </td>
            <td>
               
            </td>
        </tr>
        <tr>
            <th>Exercice 2</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Afficher les appels d'offre uniquement les titres et la description
                </p>
            </td>
            select titre AND description from appel_offre;
            <td>
                <?php echo 'Bonjour généré dynamiquement en PHP !'; ?>
            </td>
        </tr>
        <tr>
            <th>Exercice 3</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>ecrit la requete pour afficher les appels d'offre privées
                </p>
            </td>
            select df[ID_type_ap]=1 from appel_offre;
            <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 4</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Ecrire la requète pour compter le nombre total d'offre
                </p>
            </td>
            select count(*) as appel_offre from prestatire;
                        <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 5</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>faire la moyenne du montant de toute les soumissions
                </p>
            </td>
            select AVG montant AS montant from soumission ;
            <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 6</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Afficher le prestataire qui a le plus gros montant soumissioné
                </p>
            </td>
            select* from soumission  order by montant desc limit 1  
            <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 7</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Afficher les offres qui n'ont pas été soumissioné
                </p>
            </td>
select*  from appel_offre where ID is null 
            <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 8</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Afficher la requète pour changer l'email du presataire ciriac en ciriac@wooni.ci
                </p>
            </td>
           update prestataire set EMAIL='ciriac@wooni.ci'
           where ID=3;
            <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 9</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Supprimer le prestataire doumbia bakari
                </p>
            </td>
            DELETE FROM prestataire WHERE ID=10;
            <td>
                
            </td>
        </tr>
        <tr>
            <th>Exercice 10</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Faire une jointure de toute les tables présentes
                </p>
            </td>
            SELECT * FROM prestataire JOIN soumission ON prestataire.ID=soumission.ID_prestataire JOIN appel_offre ON soumission.ID=appel_offre.ID JOIN type_ap ON appel_offre.ID_type_ap=type_ap.ID;
            <td>
                
            </td>
        </tr>
    </table>
</body>

</html>
