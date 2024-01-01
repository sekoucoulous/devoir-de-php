<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Entreprise de Calculs PHP</title>
    <style>
       body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        body1 {
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        .hero {
            margin-top: 50px;
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        input, select, button {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Votre Logo</div>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#calculatrice">Calculatrice</a></li>
                <li><a href="#exercices">Exercices</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Services de Calculs PHP</h1>
            <p>Effectuez des calculs instantanément avec notre calculatrice en ligne.</p>
        </div>
    </header>
    <section id="calculatrice">
        <h2>Calculatrice en Ligne</h2>

        <div class="calculator">
            <form action="" method="post">
                <!-- Sélection de l'exercice -->
                <form action="index.php" method="post">
            <label for="exercice">Sélectionnez l'exercice :</label>
            <select name="exercice" id="exercice">
                <option value="1">Exercice 1</option>
                <option value="2">Exercice 2</option>
                <option value="3">Exercice 3</option>
                <option value="4">Exercice 4</option>
                <option value="5">Exercice 5</option>
                <option value="6">Exercice 6</option>
                <option value="7">Exercice 7</option>
                <option value="8">Exercice 8</option>
                <option value="9">Exercice 9</option>
                <option value="10">Exercice 10</option>
                <option value="11">Exercice 11</option>
                <option value="12">Exercice 12</option>
                <option value="13">Exercice 13</option>
                <option value="14">Exercice 14</option>
            </select>

                <!-- Champ de saisie du nombre (visible pour certains exercices) -->
                <?php if (isset($_POST['exercice']) && in_array($_POST['exercice'], ['2', '3', '5','6','7','8','9','10'])): ?>
                    <label for="nombre">Entrez un nombre :</label>
                    <input type="text" name="nombre" id="nombre">
                <?php endif; ?>

                <!-- Bouton de soumission -->
                <button type="submit">Validez</button>
            </form>

            <!-- Résultat de l'exercice -->
            <div id="resultat">
                <?php
                // Traitement des résultats des exercices
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['exercice'])) {
                        $exercice = $_POST['exercice'];

                        switch ($exercice) {
                            case '1':
                                // Ajoutez ici le code pour l'exercice 1
                                break;
                            case '2':
                                // Ajoutez ici le code pour l'exercice 2
                                $nombreEx2 = (int)$_POST['nombre'];
                                if ($nombreEx2 % 3 == 0 && $nombreEx2 % 5 == 0) {
                                    echo "$nombreEx2 est un multiple de 3 et de 5.";
                                } else {
                                    echo "$nombreEx2 n'est pas un multiple de 3 et de 5.";
                                }
                                break;
                            case '3':
                                // Ajoutez ici le code pour l'exercice 3
                                $nombreInitialEx3 = (int)$_POST['nombre'];
                                $tiragesWhileEx3 = 0;
                                $nombreTireWhileEx3 = 0;

                                while ($nombreTireWhileEx3 != $nombreInitialEx3) {
                                    $nombreTireWhileEx3 = rand(100, 999);
                                    $tiragesWhileEx3++;
                                }

                                echo "Avec while, le nombre initial $nombreInitialEx3 a été obtenu en $tiragesWhileEx3 tirages.";

                                $tiragesForEx3 = 0;
                                $nombreTireForEx3 = 0;

                                for ($i = 0; $nombreTireForEx3 != $nombreInitialEx3; $i++) {
                                    $nombreTireForEx3 = rand(100, 999);
                                    $tiragesForEx3 = $i + 1;
                                }

                                echo "Avec for, le nombre initial $nombreInitialEx3 a été obtenu en $tiragesForEx3 tirages.";
                                break;
                            case '4':
                                // Ajoutez ici le code pour l'exercice 4
                                $nombre1Ex4 = (int)readline("Entrez le premier entier : ");
                                $nombre2Ex4 = (int)readline("Entrez le deuxième entier : ");

                                // Calcul du PPCM
                                $ppcmEx4 = 1;
                                $maxEx4 = max($nombre1Ex4, $nombre2Ex4);

                                for ($i = 2; $i <= $maxEx4; $i++) {
                                    while ($nombre1Ex4 % $i == 0 || $nombre2Ex4 % $i == 0) {
                                        $ppcmEx4 *= $i;
                                        if ($nombre1Ex4 % $i == 0) $nombre1Ex4 /= $i;
                                        if ($nombre2Ex4 % $i == 0) $nombre2Ex4 /= $i;
                                    }
                                }

                                echo "Le PPCM de $nombre1Ex4 et $nombre2Ex4 est $ppcmEx4.";
                                break;
                            case '5':
                                // Ajoutez ici le code pour l'exercice 5
                                $rayonEx5 = (float)readline("Entrez le rayon du cercle : ");

                                // Calculs
                                $diametreEx5 = 2 * $rayonEx5;
                                $perimetreEx5 = 2 * M_PI * $rayonEx5;
                                $surfaceEx5 = M_PI * pow($rayonEx5, 2);

                                echo "Diamètre : $diametreEx5, Périmètre : $perimetreEx5, Surface : $surfaceEx5.";
                                break;
                            case '6':
                                // Ajoutez ici le code pour l'exercice 6
                                $nombreEx6 = (int)readline("Entrez un nombre : ");
                                echo "Les diviseurs de $nombreEx6 sont : ";
                                for ($i = 1; $i <= $nombreEx6; $i++) {
                                    if ($nombreEx6 % $i == 0) {
                                        echo "$i ";
                                    }
                                }
                                break;
                            case '7':
                                // Ajoutez ici le code pour l'exercice 7
                                $nombreEx7 = (int)readline("Entrez un nombre : ");
                                $sommeDiviseursEx7 = 0;

                                for ($i = 1; $i < $nombreEx7; $i++) {
                                    if ($nombreEx7 % $i == 0) {
                                        $sommeDiviseursEx7 += $i;
                                    }
                                }

                                if ($sommeDiviseursEx7 == $nombreEx7) {
                                    echo "$nombreEx7 est un nombre parfait.";
                                } else {
                                    echo "$nombreEx7 n'est pas un nombre parfait.";
                                }
                                break;
                            case '8':
                                // Ajoutez ici le code pour l'exercice 8
                                $tableauEx8 = array(
                                    "personne1" => array("prenom" => "John", "ville" => "Paris", "age" => 30),
                                    "personne2" => array("prenom" => "Jane", "ville" => "Lyon", "age" => 25),
                                    // Ajoutez d'autres personnes au tableau
                                );

                                // Affichage
                                foreach ($tableauEx8 as $nom => $infos) {
                                    echo "$nom : ";
                                    foreach ($infos as $cle => $valeur) {
                                        echo "$cle = $valeur, ";
                                    }
                                    echo "<br>";
                                }
                                break;
                            case '9':
                                // Ajoutez ici le code pour l'exercice 9
                                $tableauEx9 = array(
                                    "personne1" => array("prenom" => "John", "ville" => "Paris", "age" => 30),
                                    "personne2" => array("prenom" => "Jane", "ville" => "Lyon", "age" => 25),
                                    // Ajoutez d'autres personnes au tableau
                                );

                                // Affichage
                                foreach ($tableauEx9 as $nom => $infos) {
                                    echo "$nom : ";
                                    foreach ($infos as $cle => $valeur) {
                                        echo "$cle = $valeur, ";
                                    }
                                    echo "<br>";
                                }
                                break;
                            case '10':
                                // Ajoutez ici le code pour l'exercice 10
                                $tableauEx10 = array(
                                    "personne1" => array("prenom" => "John", "ville" => "Paris", "age" => 30),
                                    "personne2" => array("prenom" => "Jane", "ville" => "Lyon", "age" => 25),
                                    // Ajoutez d'autres personnes au tableau
                                );

                                // Affichage
                                foreach ($tableauEx10 as $nom => $infos) {
                                    echo "$nom : ";
                                    foreach ($infos as $cle => $valeur) {
                                        echo "$cle = $valeur, ";
                                    }
                                    echo "<br>";
                                }
                                break;
                                case '11':
                                    // Ajoutez ici le code pour l'exercice 11
                                    $tableauEx8 = array(
                                        "personne1" => array("prenom" => "John", "ville" => "Paris", "age" => 30),
                                        "personne2" => array("prenom" => "Jane", "ville" => "Lyon", "age" => 25),
                                        // Ajoutez d'autres personnes au tableau
                                    );
                
                                    $tableauEx9 = array(
                                        "personne1" => array("prenom" => "John", "ville" => "Paris", "age" => 30),
                                        "personne2" => array("prenom" => "Jane", "ville" => "Lyon", "age" => 25),
                                        // Ajoutez d'autres personnes au tableau
                                    );
                
                                    // Affichage avec une boucle while
                                    echo "<h3>Exercice 8 - Tableau associatif</h3>";
                                    $keysEx8 = array_keys($tableauEx8);
                                    $i = 0;
                                    while ($i < count($keysEx8)) {
                                        $nom = $keysEx8[$i];
                                        $infos = $tableauEx8[$nom];
                                        echo "$nom : ";
                                        foreach ($infos as $cle => $valeur) {
                                            echo "$cle = $valeur, ";
                                        }
                                        echo "<br>";
                                        $i++;
                                    }
                
                                    echo "<h3>Exercice 9 - Tableau associatif dans un tableau</h3>";
                                    $keysEx9 = array_keys($tableauEx9);
                                    $j = 0;
                                    while ($j < count($keysEx9)) {
                                        $nom = $keysEx9[$j];
                                        $infos = $tableauEx9[$nom];
                                        echo "$nom : ";
                                        foreach ($infos as $cle => $valeur) {
                                            echo "$cle = $valeur, ";
                                        }
                                        echo "<br>";
                                        $j++;
                                    }
                                    break;
                            default:
                                echo "Sélectionnez un exercice.";
                                break;
                        }
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contactez-nous</h2>
        <p>Remplissez le formulaire ci-dessous pour nous contacter.</p>
        <!-- Ajoutez ici un formulaire de contact -->
    </section>

    <footer>
        <p>&copy; 2023 Entreprise de Calculs PHP. Tous droits réservés.</p>
    </footer>
</body>
</html>
