<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset des marges et des paddings pour assurer une consistance entre les navigateurs */
        
body, h1, h2, p, ul, li, form, fieldset, legend, label, input, button {
    margin: 0;
    padding: 0;
    border: 0;
}

/* Style de base pour le corps de la page */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    background:url(cercle.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1550px 650px;
}
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    background-color:transparent
}
main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color:transparent
}

/* Section individuelle */
section {
    margin-bottom: 20px;
    border:solid;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
     font-family: Std, fantasy,Impact, fantasy;
    
}

/* Formulaire */
form {
    display: flex;
    flex-direction: column;
}

/* Champ de formulaire */
label {
    margin-bottom: 5px;
}

input {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Bouton de soumission */
button {
    background-color: #333;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

/* Pied de page */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
    <title>Exercice 12 - Formulaire Adresse Client</title>
</head>
<body>

    <header>
        <h1>Exercice 12 - Formulaire Adresse Client</h1>
    </header>

    <main>
        <section>
            <h2>Adresse Client</h2>

            <form action="traitement.php" method="post">
                <fieldset>
                    <legend>Adresse client</legend>

                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" required>

                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" required>

                    <label for="adresse">Adresse :</label>
                    <input type="text" name="adresse" id="adresse" required>

                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" id="ville" required>

                    <label for="code_postal">Code Postal :</label>
                    <input type="text" name="code_postal" id="code_postal" required>
                </fieldset>

                <button type="submit">Valider</button>
            </form>
        </section>
    </main>

</body>
</html>
