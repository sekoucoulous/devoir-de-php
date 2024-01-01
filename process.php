<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les chaînes depuis le formulaire
    $inputString1 = isset($_POST['inputString1']) ? $_POST['inputString1'] : '';
    $inputString2 = isset($_POST['inputString2']) ? $_POST['inputString2'] : '';

    // Appeler la fonction pour capitaliser le premier caractère de chaque chaîne
    capitalizeFirst($inputString1);
    capitalizeFirst($inputString2);

    // Afficher le résultat
    echo '<h2>Résultat :</h2>';
    echo '<ul>';
    echo "<li>$inputString1</li>";
    echo "<li>$inputString2</li>";
    echo '</ul>';
} else {
    // Redirection en cas d'accès direct au fichier
    header('Location: exercice15.html');
    exit();
}

function capitalizeFirst(&$str) {
    $str = ucfirst(strtolower($str));
}
?>
