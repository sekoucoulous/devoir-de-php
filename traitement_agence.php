<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier quelle action a été choisie
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    // Rediriger l'utilisateur en fonction de son choix
    switch ($action) {
        case 'vendre':
            header("Location: vendre.php");
            break;
        case 'acheter':
            header("Location: acheter.php");
            break;
        case 'louer':
            header("Location: louer.php");
            break;
        default:
            echo "Action inconnue.";
            break;
    }
} else {
    echo "Mauvaise méthode de requête.";
}
?>
