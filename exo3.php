<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Difference entre deux heue donnee</h1>

<?php


    /* 
    src : https://www.w3schools.com/php/func_date_date.asp#:~:text=The%20following%20characters%20can%20be,leading%20zeros%20(1%20to%2031)
    
    Les dates
écrivez une fonction qui prend deux heures de début et de fin (par exemple, 9:30 - 14:45) et calcule la durée totale en heures et minutes, puis en secondes
afficher la date actuelle sous la forme : “Aujourd’hui, c’est mardi 17 octobre 2023” en utilisant la fonction “date”
 */

/*$aujourdhui = '2014-04-25';
$demain = date('Y-m-d', strtotime("$aujourdhui +1 day"));
echo $demain;
*/


/*
$start = strtotime("08:00");
$end =  strtotime("08:00");
$dif = $end - $start - 1;
//echo date("H:i:s", $dif);

function dateDif($start, $end) {
    
    $dif = strtotime($end) - strtotime($start) -2;
    return  date("H:i:s", $dif);
}

$hourDif = dateDif("23:00", "02:00");
echo "la diffrence est de " . $hourDif;


echo "<h2>Afficher la date dhaujourdhui</h2>";

$today =  date("Y-m-d");
if(date('d')=="Oct"){
    echo "reflog";
}
echo "Today is ". date('l')." ".date('d') ." " . date('F')." ". date('Y');

echo "<h3>Verifier si une année est bisextile</h3>";

*/

/*$d= mktime(00, 00, 00, 8, 12, 2014);
if( date('d',$d) ==12  ){
    echo "is";
}
else {
    echo "is not";
}
//echo date('d',$d);
*/

function bisextile($year){
    $d = mktime(00, 00, 00, 1,01,$year);
    if( date('y',$d) %400 == 0 OR date('y',$d)%100 != 0 AND date('y',$d) %4 == 0) {
        $show = date('Y',$d) . ' est une annee bisextile';
        return $show;
    }
    else{
        $show = date('Y',$d) . ' NEST pas une annee bisextile';
        return $show;
    }
}

echo bisextile(1968); //
?>
    
</body>
</html>