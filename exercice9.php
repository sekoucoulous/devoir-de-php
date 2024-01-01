<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #495057;
    margin: 0;
    padding: 0;
    text-align: center;
    background:url(cercle.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1600px 700px;
}

header {
    background-color: black;
    padding: 20px;
    color: #fff;
    background-color:transparent;
}

h1 {
    margin: 0;
    color:black
}

main {
    margin: 20px;
    background-color:transparent;
}

section {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    background-color:transparent;
    border:solid
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
    <title>Exercice 9 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 9 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Tableau Associatif Multidimensionnel</h2>

            <?php
           
            $personnes = array(
                'Fall' => array('prenom' => 'Modou', 'ville' => 'HLM', 'age' => 20),
                'Coulibaly' => array('prenom' => 'Bassekou', 'ville' => 'Bamako', 'age' => 20),
                'Bah' => array('prenom' => 'Gandho', 'ville' => 'Conakry', 'age' => 21),
                'Toure' => array('prenom' => 'Aziz', 'ville' => 'Mbao', 'age' => 21),
                'Sagna' => array('prenom' => 'Elisa', 'ville' => 'Medina', 'age' => 20),
                'Diakite' => array('prenom' => 'Hamidou', 'ville' => 'Bamako', 'age' => 21),
                'Sangare' => array('prenom' => 'Adolphe', 'ville' => 'point E', 'age' => 22),
                
            );

           
            echo "<table border='1'>";
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
