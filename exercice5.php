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
    background-size:1500px 720px;
}

header {
    background-color: #3498db;
    padding: 20px;
    color: #fff;
    
}

h1 {
    margin: 0;
    background-color:transparent;
}

main {
    margin: 20px;
}

section {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 90px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-family: Std, fantasy,Impact, fantasy;
    background-color:transparent;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input {
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 10px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #2980b9;
}

#resultat {
    background-color: #ecf0f1;
    padding: 10px;
    border-radius: 5px;
}

    </style>
    <title>Exercice 5 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 5 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Calculs pour un Cercle</h2>
            <form action="" method="post">
                <label for="rayon">Entrez le rayon du cercle :</label>
                <input type="text" name="rayon" id="rayon" required>
                <button type="submit">Calculer</button>
            </form>

            <div id="resultat">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $rayon = isset($_POST['rayon']) ? (float)$_POST['rayon'] : 0;

                    // Calculs
                    $diametre = 2 * $rayon;
                    $perimetre = 2 * M_PI * $rayon;
                    $surface = M_PI * pow($rayon, 2);
                    echo "Diamètre : $diametre, Périmètre : $perimetre, Surface : $surface.";
                }
                ?>
            </div>
        </section>
    </main>


</body>
</html>
