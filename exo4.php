<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function randomName(){
            $consone = array("b", "c", "d", "f", "g", "h", "j", "k","l","m","n","p","q","r","s","t","v","w","x","z");
            $voyelle = array("a","e","i","u","o","y");
            $name = array();
            $defNameLengh = 5;
            $temp = ""; 
            for ($i = 0; $i < $defNameLengh; $i++){
                $randConsone = rand(0,19);
                $randVoyelle = rand(0,5);
               // echo $rand;
                   
                 if($i%2 == 0){
                    $temp = $consone[$randConsone];
                 }else{
                    $temp = $voyelle[$randVoyelle];
                 }
                 //echo strtoupper( $temp);
                 echo lcfirst( $temp);
                 
                 
            }
            return $temp;
        }
        randomName();  
    ?>
    
</body>
</html>