<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    color: #343a40;
    margin: 0;
    padding: 0;
    text-align: center;
    background:url(tirage.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1500px 700px;
}

header {
    background-color: #007bff;
    padding: 20px;
    color: #fff;
    background-color:transparent
}
}

h1 {
    margin: 0;
}

main {
    margin: 20px;
}

section {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    background-color:transparent;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
}

h2 {
    color: #007bff;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

label {
    margin-bottom: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-family: Std, fantasy,Impact, fantasy;
}

input {
    padding: 8px;
    margin-bottom: 15px;

}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

#resultat {
    margin-top: 20px;
    font-weight: bold;
}

footer {
    background-color: #343a40;
    color: #fff;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
    <title>Exercice 4 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 4 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Calcul du PPCM</h2>
            <form action="" method="post">
                <label for="nombre1">Entrez le premier entier :</label>
                <input type="text" name="nombre1" id="nombre1" required>
                <label for="nombre2">Entrez le deuxième entier :</label>
                <input type="text" name="nombre2" id="nombre2" required>
                <button type="submit">Calculer</button>
            </form>

            <div id="resultat">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre1 = isset($_POST['nombre1']) ? (int)$_POST['nombre1'] : 0;
                    $nombre2 = isset($_POST['nombre2']) ? (int)$_POST['nombre2'] : 0;

                    // Trouver le plus grand des deux nombres
                    $plusGrand = $nombre1 > $nombre2 ? $nombre1 : $nombre2;

                    // Boucle pour trouver le PPCM
                    while (true) {
                        if ($plusGrand % $nombre1 == 0 && $plusGrand % $nombre2 == 0) {
                            echo "Le PPCM de $nombre1 et $nombre2 est $plusGrand.";
                            break;
                        }
                        $plusGrand++;
                    }
                }
                ?>
            </div>
        </section>
    </main>

    

</body>
</html>
