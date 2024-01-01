<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    background:url(tva.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1550px 650px;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
    background-color:transparent

}

main {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color:transparent
}

section {
    margin-bottom: 20px;
    border:solid;
    color:white
}

h2 {
    color: #333;
    color:white;
    background:black;
    text-align: center;

}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
}

input {
    padding: 10px;
    margin-top: 5px;
}

button {
    padding: 10px;
    margin-top: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
    <title>Exercice 13 - Calcul TVA</title>
</head>
<body>

    <header>
        <h1>Exercice 13 - Calcul TVA</h1>
    </header>

    <main>
        <section>
            <h2>Calcul TVA</h2>

            <form action="traitement_tva.php" method="post">
                <label for="prix_ht">Prix HT :</label>
                <input type="text" name="prix_ht" id="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? $_POST['prix_ht'] : ''; ?>" required>

                <label for="taux_tva">Taux de TVA :</label>
                <input type="text" name="taux_tva" id="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? $_POST['taux_tva'] : ''; ?>" required>

                <button type="submit">Calculer</button>
            </form>

            <?php
            // Affichage du résultat si le formulaire a été soumis
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
            }
            ?>

        </section>
    </main>

</body>
</html>
