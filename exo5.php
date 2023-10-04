<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo5 Caluer la moyenne </h1>

    <?php 

        $array = array(24, 34, 45, 6, 7, 9, 5, 9, 10, 11, 12, 13, 14, 115, 6, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33);
        $arrayTest = array("1", "2", "3", "4", "5");
        $temp = 0;
        $moy = 0;
        foreach($array as $value){            
            $temp += $value;
            $nbr = count($array,1);
            $moy = $temp/$nbr;
             //echo "count " .$nbr;
        }
        echo "la moyennne de la liste stocker and le tableau est " .$moy ;
    ?>
    
</body>
</html>