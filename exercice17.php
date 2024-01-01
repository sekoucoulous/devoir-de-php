<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* style.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

section {
    
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    background-color: #3498db;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

div {
    margin-top: 10px;
    text-align: center;
    font-size: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
}

th {
    background-color: #3498db;
    color: #fff;
}

/* Add more styles as needed */

    </style>
    <title>Exercice 17</title>
</head>

<body>

    <section>
        <header>
            <h1>Exercice 17</h1>
        </header>

        <div>
            
            <div>
                <?php
                // Tableau multidimensionnel
                $exempleTableau = array(
                    'Nom' => 'Coulibaly',
                    'Prenom' => 'Bassekou',
                    'Age' => 30,
                );

                // Affichage du tableau
                echo '<table border="1">';
                echo '<tr>';
                foreach ($exempleTableau as $cle => $valeur) {
                    echo '<th>' . htmlspecialchars($cle) . '</th>';
                }
                echo '</tr>';

                echo '<tr>';
                foreach ($exempleTableau as $valeur) {
                    echo '<td>' . htmlspecialchars($valeur) . '</td>';
                }
                echo '</tr>';
                echo '</table>';
                ?>
            </div>
        </div>
    </section>

</body>

</html>
