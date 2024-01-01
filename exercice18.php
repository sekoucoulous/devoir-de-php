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
    margin: 20px;
    padding: 20px;
    background-color: #f7f7f7;
}



header {
    background-color: #3498db;
    color: #fff;
    text-align: center;
    padding: 20px ;
}

div {
    margin-top: 20px;
    
    font-size: 18px;
}

/* Add more styles as needed */

    </style>
    <title>Exercice 18</title>
</head>
<body>

<section>
    <header>
        <h1>Exercice 18</h1>
    </header>

    <div>
        <!-- Contenu de l'exercice -->
        <?php
        // Affichage du motif
        for ($i = 1; $i <= 10; $i++) {
            // Répétition du chiffre $i $i fois
            for ($j = 1; $j <= $i; $j++) {
                echo $i;
            }
            echo "<br>";
        }
        ?>
    </div>
</section>

</body>
</html>
