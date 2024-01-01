<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données depuis le formulaire
    $angle = isset($_POST['angle']) ? $_POST['angle'] : '';
    $unit = isset($_POST['unit']) ? $_POST['unit'] : 'radian';

    // Appeler la fonction pour calculer le sinus
    $result = calculateSinus($angle, $unit);

    // Afficher le résultat
    echo "<h2>Le sinus de $angle $unit est : $result</h2>";
} else {
    // Redirection en cas d'accès direct au fichier
    header('Location: exercice16.html');
    exit();
}

function calculateSinus($angle, $unit = 'radian') {
    // Convertir l'angle à radians si l'unité est différente
    switch ($unit) {
        case 'degree':
            $angle = deg2rad($angle);
            break;
        case 'grade':
            $angle = deg2rad($angle * 9 / 10);
            break;
    }

    // Calculer le sinus
    $sinus = sin($angle);

    return $sinus;
}

?>
