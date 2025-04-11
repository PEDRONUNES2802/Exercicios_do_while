<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ate ou menor que 0</title>
</head>
  
<body>
    <?php
    $numeroU = $_POST ["numeroU"];
    $numeroA = rand(1, 10);
    $soma = $numeroA - $numeroU;
    $processo = 0;
   
    
    

    do {
        $numeroA = rand(1, 10);
        $soma = $numeroA - $numeroU;
        $processo++;
        
        echo "Número de processos até chegar num valor igual ou menor que zero: $processo<br></br>";
        echo "Depois da subtraçao de: $numeroA - $numeroU<br></br>Resultado da conta: $soma<br></br> ";
        echo "Número aleatório: $numeroA<br></br>";
        echo "Número do usuário (número digitado): $numeroU<br></br>";
    } while ($soma > 0);
    
    echo "O processo foi executado $processo vezes até o valor ser igual ou menor que zero.😎";

    ?>
</body>
</html>