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
}

header {
    background-color: #007bff;
    padding: 20px;
    color: #fff;
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
}

h2 {
    color: #007bff;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin-bottom: 10px;
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
    <title>Exercice 3 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 3 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Tirages aléatoires</h2>
            <form action="" method="post">
                <label for="nombreInitial">Entrez un nombre à trois chiffres :</label>
                <input type="text" name="nombreInitial" id="nombreInitial">
                <button type="submit">Valider</button>
            </form>

            <div id="resultat">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombreInitialEx3 = isset($_POST['nombreInitial']) ? (int)$_POST['nombreInitial'] : 0;
                    $tiragesWhileEx3 = 0;
                    $nombreTireWhileEx3 = 0;

                    while ($nombreTireWhileEx3 != $nombreInitialEx3) {
                        $nombreTireWhileEx3 = rand(100, 999);
                        $tiragesWhileEx3++;
                    }

                    echo "Avec while, le nombre initial $nombreInitialEx3 a été obtenu en $tiragesWhileEx3 tirages.";
                }
                ?>
                <div id="resultat">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombreInitialEx3 = isset($_POST['nombreInitial']) ? (int)$_POST['nombreInitial'] : 0;
                    $tiragesForEx3 = 0;
                    $nombreTireForEx3 = 0;

                    for ($tiragesForEx3 = 0; $nombreTireForEx3 != $nombreInitialEx3; $tiragesForEx3++) {
                        $nombreTireForEx3 = rand(100, 999);
                    }

                    echo "Avec for, le nombre initial $nombreInitialEx3 a été obtenu en $tiragesForEx3 tirages.";
                }
                ?>
            </div>
            </div>
        </section>
    </main>

   

</body>
</html>
