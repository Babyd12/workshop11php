<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Couleur préférée</title>
</head>
<body>
    <h4>Votre couleur préférée est </h4>
    <?php
    if (isset($_SESSION["couleur_preferee"])) {
        $couleurPreferee = $_SESSION["couleur_preferee"];
        echo '<p style="background-color: '.$couleurPreferee. '; width: 100px; height: 50px;">' .$couleurPreferee . '</p>'; 
        session_destroy();
       
    } else {
        echo "Aucune couleur préférée sélectionnée.";
    }
    ?>
    <br>
    <a href="test.php">Revenir à la page précédente</a>
</body>
</html>
