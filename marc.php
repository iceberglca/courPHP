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
            <p> Dans cet exercice Merci de remplcer le texte par ceci tout en respectant les sauts de ligne </br> <i>veneLorem ipsum dolor sit amet, (Saut à la ligne ) consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.; Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. (Saut à la ligne ) Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong>(Saut à la ligne)</strong> Excepteur sint occaecat cupidatat non proident,  <strong>(Saut à la ligne)</strong> sunt in culpa qui officia deserunt mollit anim id est laborum.Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero natis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. <strong><strong>(Saut à la ligne)</strong></strong> Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.<i>.
            </p> 
            </td>
            <td>
                
             
                             <?php echo " veneLorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.; Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br> Excepteur sint occaecat cupidatat non proident, <br> sunt in culpa qui officia deserunt mollit anim id est laborum.Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero natis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. <br> Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna." ?>
            </td>
        </tr>
    </table>
</body>

</html>