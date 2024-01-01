<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* style.css */

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section {
    margin-bottom: 20px;
    text-align: inline;
}

h2 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: inline;
    
}


    </style>
    <title>Exercice 12 - Traitement Formulaire</title>
</head>
<body>

    <header>
        <h1>Exercice 12 - Traitement Formulaire</h1>
    </header>

    <main>
        <section>
            <h2>Données du Formulaire</h2>

            <?php
            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupérer les données du formulaire
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $adresse = $_POST["adresse"];
                $ville = $_POST["ville"];
                $codePostal = $_POST["code_postal"];

                // Afficher les données dans un tableau HTML
                echo "<table border='1'>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Code Postal</th>
                        </tr>
                        <tr>
                            <td>$nom</td>
                            <td>$prenom</td>
                            <td>$adresse</td>
                            <td>$ville</td>
                            <td>$codePostal</td>
                        </tr>
                      </table>";
            } else {
                echo "<p>Aucune donnée reçue.</p>";
            }
            ?>

        </section>
    </main>


</body>
</html>
