<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* style.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    background:url(agence.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1500px 700px;
}

header {
    background-color: #007BFF;
    color: #fff;
    text-align: center;
    padding: 1em 0;
    background-color:transparent
}

main {
    max-width: 10000px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color:transparent
}

section {
    margin-bottom: 20px;
    text-align: center;
}

button {
    background-color: #007BFF;
    color: #fff;
    padding: 15px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    margin: 0 10px;
}

button:hover {
    background-color: #0056b3;
}
p,h2{
    color:white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-family: Std, fantasy,Impact, fantasy;
}


    </style>
    <title>Agence Immobilière</title>
</head>
<body>

    <header>
        <h1>Agence Immobilière</h1>
    </header>

    <main>
        <section>
            
            <img src="logo.jpeg" alt="">
            <p>Découvrez nos offres spéciales et promotions exclusives. Profitez d'avantages uniques en travaillant avec l'agence "Coulou Holding "  pour acheter, vendre ou louer votre propriété. Consultez nos offres en cours pour des opportunités exceptionnelles.
                .En tant que membre actif de la communauté, nous comprenons les besoins locaux et sommes déterminés à créer des liens solides. Coulou Holding  n'est pas seulement une agence immobilière, c'est un partenaire dans votre aventure immobilière."</p>
                <h2>Que souhaitez-vous faire ?</h2>
            <form action="traitement_agence.php" method="post">
                <button type="submit" name="action" value="vendre">Vendre</button>
                <button type="submit" name="action" value="acheter">Acheter</button>
                <button type="submit" name="action" value="louer">Louer</button>
            </form>

        </section>
    </main>

</body>
</html>
