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
    padding: 0;
    background:url(cercle.jpeg);
    color: rgba(51, 51, 51, 0.8);
    background-size: cover;
    background-size:1600px 700px;
    align-items: center;
    justify-content: center;
    height: 100vh;
    
}

form {
    max-width: 500px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align:center;
}

h1 {
    padding: 20px;
    color: #3498db;
    text-align:center;

    
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    box-sizing: border-box;
    text-align:center;
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
    <title>Exercice 16</title>
</head>
<body>
    <h1>Exercice 16</h1>

    <form action="calcul.php" method="post">
        <label for="angle">Saisissez l'angle :</label>
        <input type="text" name="angle" id="angle" required>

        <label for="unit">Choisissez l'unité :</label>
        <select name="unit" id="unit">
            <option value="radian" selected>Radian</option>
            <option value="degree">Degré</option>
            <option value="grade">Grade</option>
        </select>

        <button type="submit">Calculer Sinus</button>
    </form>
</body>
</html>
