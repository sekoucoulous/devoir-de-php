<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: 'Arial', sans-serif;
    
    margin: 0;
    padding: 0;
    text-align: center;
    background:url(cercle.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1600px 700px;
}

header {
    background-color: #007bff;
    padding: 20px;
    color: #fff;
    background-color:transparent
}

h1 {
    margin: 0;
}

main {
    margin: 20px;
}

section {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    border:solid;
    background-color:transparent
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #007bff;
    color: #fff;
}

tr:hover {
    background-color: #f5f5f5;
}

footer {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
    <title>Exercice 8 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 8 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Tableau Associatif Multidimensionnel</h2>

            <?php
            // Tableau associatif multidimensionnel
            $personnes = array(
                'Mane' => array('prenom' => 'Sadio', 'ville' => 'Dakar', 'age' => 32),
                'sonko' => array('prenom' => 'Ousmane', 'ville' => 'ziguinchor', 'age' => 40),
                'Dia' => array('prenom' => 'Malal', 'ville' => 'kedougou', 'age' => 22),
                'Diallo' => array('prenom' => 'Sory', 'ville' => 'tambacounda', 'age' => 21),
                'Mbacke' => array('prenom' => 'Saliou', 'ville' => 'Tivaoune', 'age' => 70),
                // Ajoutez d'autres personnes au tableau
            );

            // Affichage du tableau
            echo "<table border='5'>";
            echo "<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Âge</th></tr>";

            foreach ($personnes as $nom => $infos) {
                echo "<tr><td>$nom</td><td>{$infos['prenom']}</td><td>{$infos['ville']}</td><td>{$infos['age']}</td></tr>";
            }

            echo "</table>";
            ?>

        </section>
    </main>


</body>
</html>
