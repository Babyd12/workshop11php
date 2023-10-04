<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 8 comparaison sur chaine de caractère</h1>

    <?php 
        $sentence1 = "Hello";
        $sentence2 = "hello";


        function CompareTwoString($sentence1, $sentence2) {
            $s = $sentence1; $s2 = $sentence2;
            if( strcmp($sentence1, $sentence2) !== 0 ){
                return  $sentence1. " est different de ". $sentence2;
            }
            else{
                return  $sentence1. " est egal a ". $sentence2;
            }

        }

        echo CompareTwoString($sentence1, $sentence2);
    ?>
</body>
</html>