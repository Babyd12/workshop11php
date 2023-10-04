<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["couleur"])) {
    $_SESSION["couleur_preferee"] = $_POST["couleur"];
    header("Location: test.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sélection de couleur préférée</title>
</head>
<body>
    <h5>Sélectionnez votre couleur préférée :</h5>
    <form method="POST" action="">
        <label for="couleur">Couleur :</label>
        <select id="couleur" name="couleur">
            <option value="red">Rouge</option>
            <option value="yellow">Jaune</option>
            <option value="green">Vert</option>
            <option value="blue">Bleu</option>
            <option value="black">Noire</option>
            <option value="gray">Gris</option>
        </select><br>
        <input type="submit" value="Valider">
    </form>
    <button type="button"> <a href="test2.php" target="_blank" rel="noopener noreferrer">Page suivante</a> </button>
</body>
</html>
