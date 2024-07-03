<?php
$note=100;
function obtenirAppreciation($note) {
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
echo "Entrez une note sur 100 : ";
str_repeat(0, 100);
$handle = fopen("php://stdin", "r");
$note = fgets($handle);
fclose($handle);
$note = trim($note);
$note = (int)$note;
$appreciation = obtenirAppreciation($note);
echo "La note de $note correspond à : $appreciation\n";
?>
