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
    background-color:transparent
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
    background-color:transparent
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
    <title>Exercice 2 - PHP</title>
</head>
<body>

    <header>
        <h1>Exercice 2 - PHP</h1>
    </header>

    <main>
        <section>
            <h2>Vérification de multiples de 3 et 5</h2>
            <form action="" method="post">
                <label for="nombre">Entrez un nombre :</label>
                <input type="text" name="nombre" id="nombre">
                <button type="submit">Valider</button>
            </form>

            <div id="resultat">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombreEx2 = isset($_POST['nombre']) ? (int)$_POST['nombre'] : 0;

                    if ($nombreEx2 % 3 == 0 && $nombreEx2 % 5 == 0) {
                        echo "$nombreEx2 est un multiple de 3 et de 5.";
                    } else {
                        echo "$nombreEx2 n'est pas un multiple de 3 et de 5.";
                    }
                }
                ?>
            </div>
        </section>
    </main>

    

</body>
</html>
