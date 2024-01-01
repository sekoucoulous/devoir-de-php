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

/* Style pour les paragraphes dans les sections */
section p {
    margin-bottom: 10px;
}

/* Style pour les titres de section */
section h2 {
    color: #333;
}

    </style>
    <title>Exercice 11 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 11 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Boucle while - Tableau de l'Exercice 8</h2>

            <?php
            // Tableau associatif multidimensionnel (Exercice 8)
            $personnesEx8 = array(
                'Mane' => array('prenom' => 'Sadio', 'ville' => 'Dakar', 'age' => 32),
                'sonko' => array('prenom' => 'Ousmane', 'ville' => 'ziguinchor', 'age' => 40),
                'Dia' => array('prenom' => 'Malal', 'ville' => 'kedougou', 'age' => 22),
                'Diallo' => array('prenom' => 'Sory', 'ville' => 'tambacounda', 'age' => 21),
                'Mbacke' => array('prenom' => 'Saliou', 'ville' => 'Tivaoune', 'age' => 70),
               
            );

            // Utilisation de la boucle while pour lire le tableau
            $nomsEx8 = array_keys($personnesEx8);
            $indexEx8 = 0;

            while ($indexEx8 < count($nomsEx8)) {
                $nom = $nomsEx8[$indexEx8];
                $infos = $personnesEx8[$nom];

                echo "<p>$nom : ";
                foreach ($infos as $cle => $valeur) {
                    echo "$cle = $valeur, ";
                }
                echo "</p>";

                $indexEx8++;
            }
            
            ?>

        </section>

        <section>
            <h2>Boucle while - Tableau de l'Exercice 9</h2>

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

            // Utilisation de la boucle while pour lire le tableau
            $nomsEx9 = array_keys($personnesEx9);
            $indexEx9 = 0;

            while ($indexEx9 < count($nomsEx9)) {
                $nom = $nomsEx9[$indexEx9];
                $infos = $personnesEx9[$nom];

                echo "<p>$nom : ";
                foreach ($infos as $cle => $valeur) {
                    echo "$cle = $valeur, ";
                }
                echo "</p>";

                $indexEx9++;
            }
            ?>

        </section>
    </main>

    <footer>
        <p>&copy; 2023 Exercices PHP. Tous droits réservés.</p>
    </footer>
</body>
</html>
