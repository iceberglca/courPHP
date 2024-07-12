<?php
$note=100;
function getAppreciation($note) {
    if ($note >= 90) {
        return "Excellent";
    } elseif ($note >= 80) {
        return "Très Bien";
    } elseif ($note >= 70) {
        return "Bien";
    } elseif ($note >= 60) {
        return "Assez Bien";
    } elseif ($note >= 50) {
        return "Passable";
    } else {
        return "Insuffisant";
    }
}

while (true) {
    
    echo "Veuillez entrer une note sur 100 : ";
    

    $input = trim(fgets(STDIN));
    
   
    if (is_numeric($input) && $input >= 0 && $input <= 100) {
        $note = (int)$input;
        $appreciation = getAppreciation($note);
        echo "Vous avez entré une note valide : $note\n";
        echo "Appréciation : $appreciation\n";
        break; 
        echo "La note doit être un nombre entre 0 et 100. Veuillez réessayer.\n";
    }
}


?>
