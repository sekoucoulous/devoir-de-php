<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* style.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #007BFF;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section {
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    margin: auto;
}

label {
    margin-bottom: 8px;
    font-weight: bold;
}

input {
    padding: 8px;
    margin-bottom: 16px;
}

button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    position: fixed;
    width: 100%;
    bottom: 0;
}

    </style>
    <title>Exercice 13 - Traitement TVA</title>
</head>
<body>

    <header>
        <h1>Exercice 13 - Traitement TVA</h1>
    </header>

    <main>
        <section>
            <h2>Résultat du Calcul TVA</h2>

            <?php
            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupérer les données du formulaire
                $prixHT = floatval($_POST["prix_ht"]);
                $tauxTVA = floatval($_POST["taux_tva"]);

                // Calculer la TVA et le prix TTC
                $montantTVA = $prixHT * ($tauxTVA / 100);
                $prixTTC = $prixHT + $montantTVA;

                // Afficher le résultat
                echo "<label for='montant_tva'>Montant de la TVA :</label>";
                echo "<input type='text' name='montant_tva' id='montant_tva' value='$montantTVA' readonly>";

                echo "<label for='prix_ttc'>Prix TTC :</label>";
                echo "<input type='text' name='prix_ttc' id='prix_ttc' value='$prixTTC' readonly>";
            } else {
                echo "<p>Aucune donnée reçue.</p>";
            }
            ?>

        </section>
    </main>

</body>
</html>
