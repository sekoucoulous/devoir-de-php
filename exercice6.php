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
    background:url(tirage.jpeg);
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
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    background-color:transparent
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
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}

#resultat {
    background-color: #e2e6ea;
    padding: 10px;
    border-radius: 5px;
}

    </style>
    <title>Exercice 6 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 6 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Diviseurs d'un Nombre</h2>
            <form action="" method="post">
                <label for="nombre">Entrez un nombre :</label>
                <input type="text" name="nombre" id="nombre" required>
                <button type="submit">Afficher les diviseurs</button>
            </form>

            <div id="resultat">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = isset($_POST['nombre']) ? (int)$_POST['nombre'] : 0;

                    echo "Les diviseurs de $nombre sont : ";
                    for ($i = 1; $i <= $nombre; $i++) {
                        if ($nombre % $i == 0) {
                            echo "$i ";
                        }
                    }
                }
                ?>
            </div>
        </section>
    </main>


</body>
</html>
