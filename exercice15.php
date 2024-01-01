<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* style.css */

body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 100px;
    background:url(tirage.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1600px 700px;
    align-items: center;
    justify-content: center;
    height: 100vh;
    text-align: inline;
    
}

form {
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color:transparent;
    border:solid;
    color:white
}

h1 {
    text-align: center;
    color:white;
    
    
    
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #2c3e50;
}

/* Add more styles as needed */

    </style>
    <title>Exercice 15</title>
</head>
<body>
    <h1>Exercice 15</h1>

    <form action="process.php" method="post">
    <label for="inputString1">Saisissez la première chaîne :</label>
    <input type="text" name="inputString1" id="inputString1" required>

    <label for="inputString2">Saisissez la deuxième chaîne :</label>
    <input type="text" name="inputString2" id="inputString2" required>

    <button type="submit">Valider</button>
</form>

</body>
</html>
