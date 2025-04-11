<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>
<body>
<h1>Quantidade de notas: </h1>
    
<fieldset>
<h2>
<?php
$n = $_POST['n'];
$n1;
$n2;
$n3;
$n4;
$n5;
$n6;
$n7;
   
            do {

                if ($n >= 100) {
                    $n1 = (100 % $n) / 100;
                }else if ($n < 100) {
                    $n1 == 0;
                    $n2 = (50 % $n) / 50;
                }
                
                if ($n1 >= 50) {
                    $n2 = (50 % $n1) / 50;
                }else if ($n1 < 50) {
                    $n2 == 0;
                    $n3 = (20 % $n1) / 20;
                }

                if ($n2 >= 20) {
                    $n3 = (20 % $n2) / 20;
                }else if ($n2 < 20) {
                    $n3 == 0;
                    $n4 = (10 % $n2) / 10;
                }

                if ($n3 >= 10) {
                    $n4 = (10 % $n3) / 10;
                }else if ($n3 < 10) {
                    $n4 == 0;
                    $n5 = (5 % $n3) / 5;
                }

                if ($n4 >= 5) {
                    $n5 = (5 % $n4) / 5;
                }else if ($n4 < 5) {
                    $n5 == 0;
                    $n6 = (2 % $n4) / 2;
                }

                if ($n5 >= 2) {
                    $n6 = (2 % $n4) / 2;
                }else if ($n5 < 2) {
                    $n6 == 0;
                    $n7 = (1 % $n4) / 1;
                }
  
            } while ((($n >= 100) || ($n < 100)) && (($n1 >= 50) || ($n1 < 50)) && (($n2 >= 20) || ($n2 < 20)) && (($n3 >= 10) || ($n3 < 10)) && (($n4 >= 5) || ($n4 < 5)) && (($n5 >= 2) || ($n5 < 2)) && (($n6 >= 1) || ($n6 < 1)));
 
  echo("- R$ 100,00 : "."". $n1); 
  echo("<br><br>- R$ 50,00 : "."". $n2); 
  echo("<br><br>- R$ 20,00 : "."". $n3); 
  echo("<br><br>- R$ 10,00 : "."". $n4); 
  echo("<br><br>- R$ 5,00 : "."". $n5); 
  echo("<br><br>- R$ 2,00 : "."". $n6); 
  echo("<br><br>- R$ 1,00 : "."". $n7); 

    ?>
</fieldset>
</h2>
<style>
  
h1{
    text-align: center;
    font-family: arial;
    background-color:black;
    color:white; 
    border: 2px solid white;
}

h2{
    text-align: center;
    font-family: arial;
    background-color:black;
    color:white;
    display: block;
}



</style>
</body>
</html>