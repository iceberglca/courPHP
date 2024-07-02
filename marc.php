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
            <h1> MARC EST LE BOSS</h1>
        </center>
        <p>1.1 Définition </br>
            PHP est un langage de script HTML exécuté du côté du serveur. Il veut dire « PHP : Hypertext
            Preprocessor ». Sa syntaxe est largement inspirée du langage C, de Java et de Perl, avec des
            améliorations spécifiques. Le but du langage est d'écrire rapidement des pages HTML dynamiques.</p>
        <tr>
            <th>Exercice 1</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p>Dans l'exercice on utilise l'instruction "echo" pour afficher du texte en PHP.
                    Merci de remplacer le texte entre double côte par <strong>Ici c'est paris</strong>.
                </p>
            </td>
            <td>
                <?php echo 'Bonjour généré dynamiquement en PHP !'; ?>
            </td>
        </tr>
        <tr>
            <th>Exercice 2</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <p> Dans cet exercice Merci de remplcer le texte par ceci tout en respectant les sauts de ligne </br> <i>veneLorem ipsum dolor sit amet, (Saut à la ligne ) consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.; Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. (Saut à la ligne ) Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong>(Saut à la ligne)</strong> Excepteur sint occaecat cupidatat non proident, <strong>(Saut à la ligne)</strong> sunt in culpa qui officia deserunt mollit anim id est laborum.Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero natis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. <strong><strong>(Saut à la ligne)</strong></strong> Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.<i>.
                </p>
            </td>
            <td>


                <?php echo " veneLorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.; Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br> Excepteur sint occaecat cupidatat non proident, <br> sunt in culpa qui officia deserunt mollit anim id est laborum.Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero natis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. <br> Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna." ?>
            </td>
        </tr>
        <tr>
            <th>Exercice 3</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Créer un tableau de nombres entiers.</li>
                    <li>Afficher tous les éléments du tableau.</li>
                    <li>Calculer et afficher la somme de tous les éléments du tableau.</li>
                    <li>Trouver et afficher la valeur maximale du tableau.</li>
                    <li>Trier le tableau en ordre croissant et afficher le tableau trié</li>
                </ul>
            </td>
            <td>


                <?php
                $tableau = array(1, 2, 3, 4, 5, 6, 7, 8 ,9);
                print_r($tableau);
                echo "<br>";
                $somme = array_sum($tableau);
                echo ("la somme de tous les elements du tableau est:$somme.");
                echo "<br>";
                $max_value = max($tableau);
                echo "la valeur maximale du tableau est:$max_value.";
                echo "<br>";
                sort($tableau);
                echo "le tableau en ordre croissant est:";
                foreach ($tableau as $valeur) {
                    echo 'valeur:' . $valeur;
                }

                ?>
            </td>
        </tr>
        <tr>
            <th>Exercice 4</th>
            <th>Resultat</th>
        </tr>
        <tr>
            <td>
                <ol>
                    <li>Créer un tableau de nombres entiers.</li>
                    <li>Afficher tous les éléments du tableau. en utilisant une boucle (print_r est interdit) </li>
                    <li>Calculer et afficher la somme de tous les éléments du tableau. (array_sum est interdit)</li>
                    <li>Trouver et afficher la valeur maximale du tableau. (max est interdit)</li>
                    <li>Trier le tableau en ordre croissant et afficher le tableau trié (sort est interdit)</li>
                </ol>
            </td>
            <td>
                <?php
            $tableau=array(1 ,2,4,5 );
            echo "1-les elements du tableau sont:";
            var_dump($tableau);
            $somme =array_sum($tableau);
echo "2-La somme de tous les elements est : " . $somme;
echo "<br>";

   $max_value=max($tableau);
   echo "3-la valeur maximale du tableau:$max_value";
   echo "<br>";
   sort($tableau);
   echo "4-le tableau trié est:";
   foreach ($tableau as $valeur) {
                    echo 'valeur:' . $valeur;
                }

               ?>
              
            </td>
        </tr>
        <tr>
            <th>Exercice 5</th>
            <th>
               <?php
               $Nom="olloko";
               $prenom="marc-roland";
               $nom_complet=" marc-roland olloko " ;            
                 echo "1-le nom complet est:$nom_complet";
                 echo '<br>';
               $panierMaman=array('pomme','banane','cerise');
              $listeFruits = "";
$first = true;

foreach ($panierMaman as $fruit) {
    if ($first) {
        $listeFruits .= $fruit;
        $first = false;
    } else {
        $listeFruits .= ", " . $fruit;
    }
}
    echo"2-la liste de maman est:".$listeFruits;

    ?> 
            </th>
        </tr>
        <tr>
            <td>
                <ul>
                    <li>Créez un script PHP qui prend deux variables, un prénom et un nom, les concatèner et afficher le nom complet. Ex: Nom complet : Cyriaque KODIA</li>
                    <li>Soit la liste de course de maman suivante  :pomme,banane,cerise. créer un  tableau contenant cette liste,  ajouter le contenue de cette liste dans la variable "$panierMaman" séparé par une virgule puis afficher la liste de maman comme suit : "la liste de maman est ..........", l'utilisation de l'opérateur  ".=" est obligatoire </li>
                </ul>
            </td>
            <td>
            </td>
        </tr>
    </table>
</body>

</html>