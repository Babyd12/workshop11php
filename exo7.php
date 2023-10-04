<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 7 Jeu de devinette </h1>
   
    <form method='post' action=''  id='form' accept-charset='UTF-8'>
        <label for='nbre'>Devinez le nombre magique</label><br>
        <input type='number' name='playerNbrSent' placeholder ='Entrer un nombre' id='nbre' max ='25' min='0'>

        <input type='submit' class='favorite styled' value='Envoyer' name='magique' >
    </form>    
    
    <?php 
        session_start();
        if( !isset($_SESSION['randNbr'])) {
            $_SESSION['randNbr'] = rand(1,10);
            $_SESSION['count'] = -1;
            echo $stateGame = "Entrer un nombre pour commencer a jouer"; 
            //echo "La session a ete activer____";
            
        }
        else {
                
           
            //echo "La session est actif now";
            //echo "Le jeux a commencer \n";
           // echo "et la valeur a trouver est ". $_SESSION['randNbr'];
            function guess($playerNbr){
                echo "Le jeux a commencer \n";
                //echo "et la valeur a trouver est ". $_SESSION['randNbr'];
                $playerNbrSent = $_POST['playerNbrSent'];
                if($playerNbrSent > $_SESSION['randNbr']){
                    echo "<p class='error' >Plus petit </p>";
                    $_SESSION['count']++;

                }
                else if($playerNbrSent < $_SESSION['randNbr']){
                    echo "<p class='error' >Plus grand </p>";
                    $_SESSION['count']++;
                }
                else{
                    echo "<p class='succes' > Trop fort tu as trouvé avec "  . $_SESSION['count'] . " erreur(s) </p>" ;
                    echo "<p class='succes' > Entre un nombre pour rejouer </p> ";
                    
                    session_destroy();
                }

                //throw new Exception("ceci se produit car la valeur passer en argument de la fonction est ");

            }
           
        }

        guess($_POST['playerNbrSent']);


    ?>

</body>
</html>