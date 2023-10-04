<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 6 Tableaux</h1>
    <?php 
        $student = array(
            "st1" => array(
                "nom" =>"Rokhaya",
                "prenom" => "Rokhaya",
                "age" => 18,
                "notes" => 18
            ),
            "st2" => array(
                "nom" =>"Gueye",
                "prenom" => "Adama",
                "age" => 20,
                "notes" => 18
            ),
            "st3" => array(
                "nom" =>"Bah",
                "prenom" => "Binta",
                "age" => 18,
                "notes" => 18
            )

        );
        $anotherStudent = array(
            "ast1" => array(
                "nom" =>"Ngom",
                "prenom" => "Diyé",
                "age" => 20,
                "notes" => 18
            ),
            "ast2" => array(
                "nom" =>"Gueye",
                "prenom" => "Adama",
                "age" => 20,
                "notes" => 18
            ),
            "ast3" => array(
                "nom" =>"Bah",
                "prenom" => "Binta",
                "age" => 18,
                "notes" => 18
            )

        );

        echo "<h2> Affichage du premier tableau associatif </h2>";

        foreach($student as $key => $value){
            foreach($value as $_key => $_value){
                echo $_key . ' ' . $_value . "\n";
            }
            echo "<br>";
        }
        echo "<h2> Affichage du deuxième tableau associatif </h2>";

        foreach($anotherStudent as $key => $value){
            foreach($value as $_key => $_value){
                echo $_key . ' ' . $_value . "\n";
            }
            echo "<br>";
        }

        $mergeArray = array();
        $mergeArray = array_merge($student, $anotherStudent);

        echo "<h3>Affichage du tableau fusioner avec la fonction merge</h3>";

        $mergeArray =[...$student, ...$anotherStudent];

        /*
        foreach ($mergeArray as $key => $value) {
            foreach ($value as $_key => $_value) {
                echo $_key . ' : ' . $_value . "\n";
            }
            echo "<br>";    
        }
        //echo $mergeArray;
        */
    ?>
    
</body>
</html>