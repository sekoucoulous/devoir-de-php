<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset des marges et des paddings pour assurer une consistance entre les navigateurs */
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Style de base pour le corps de la page */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
}

/* En-tête de la page */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

/* Contenu principal */
main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Section individuelle */
section {
    margin-bottom: 20px;
}

/* Liens */
a {
    color: #0066cc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
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

/* Style pour les tableaux */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #333;
    color: #fff;
}

/* Style pour les paragraphes dans les sections */
section p {
    margin-bottom: 10px;
}

/* Style pour les titres de section */
section h2 {
    color: #333;
}

/* Style pour les résultats PHP */
#resultat {
    margin-top: 10px;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Style pour les formulaires */
form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input, button {
    padding: 8px;
    margin-bottom: 10px;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

    </style>
    <title>Exercice 10 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 10 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Boucle foreach - Tableau de l'Exercice 8</h2>

            <?php
         
            $personnesEx8 = array(
                'Mane' => array('prenom' => 'Sadio', 'ville' => 'Dakar', 'age' => 32),
                'sonko' => array('prenom' => 'Ousmane', 'ville' => 'ziguinchor', 'age' => 40),
                'Dia' => array('prenom' => 'Malal', 'ville' => 'kedougou', 'age' => 22),
                'Diallo' => array('prenom' => 'Sory', 'ville' => 'tambacounda', 'age' => 21),
                'Mbacke' => array('prenom' => 'Saliou', 'ville' => 'Tivaoune', 'age' => 70),
            );

            // Utilisation de la boucle foreach pour lire le tableau
            foreach ($personnesEx8 as $nom => $infos) {
                echo "<p>$nom : ";
                foreach ($infos as $cle => $valeur) {
                    echo "$cle = $valeur, ";
                }
                echo "</p>";
            }
            ?>

        </section>

        <section>
            <h2>Boucle foreach - Tableau de l'Exercice 9</h2>

            <?php
            // Tableau associatif multidimensionnel (Exercice 9)
            $personnesEx9 = array(
                'Fall' => array('prenom' => 'Modou', 'ville' => 'HLM', 'age' => 20),
                'Coulibaly' => array('prenom' => 'Bassekou', 'ville' => 'Bamako', 'age' => 20),
                'Bah' => array('prenom' => 'Gandho', 'ville' => 'Conakry', 'age' => 21),
                'Toure' => array('prenom' => 'Aziz', 'ville' => 'Mbao', 'age' => 21),
                'Sagna' => array('prenom' => 'Elisa', 'ville' => 'Medina', 'age' => 20),
                'Diakite' => array('prenom' => 'Hamidou', 'ville' => 'Bamako', 'age' => 21),
                'Sangare' => array('prenom' => 'Adolphe', 'ville' => 'point E', 'age' => 22),
            );

            // Utilisation de la boucle foreach pour lire le tableau
            foreach ($personnesEx9 as $nom => $infos) {
                echo "<p>$nom : ";
                foreach ($infos as $cle => $valeur) {
                    echo "$cle = $valeur, ";
                }
                echo "</p>";
            }
            ?>

        </section>
    </main>


</body>
</html>
