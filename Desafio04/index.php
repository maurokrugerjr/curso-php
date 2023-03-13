<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
</head>
<body>
    <form action="index.php" method="get">

        <label for="num1">Digite aqui o primeiro numero :</label>
        <input type="number" name="num1" id="idNum1">
        <label for="num1">Digite aqui o segundo numero :</label>
        <input type="number" name="num2" id="idNum2">
        <label for="num1">Digite aqui o terceiro numero :</label>
        <input type="number" name="num3" id="idNum3">
        <input type="submit" value="Enviar">

    </form>
    <?php 
        $numero1 = $_GET["num1"];
        $numero2 =  $_GET["num2"];
        $numero3 =  $_GET["num3"];
    
        $arrayNumeros =  [intval($numero1), intval($numero2), intval($numero3)];
        arsort($arrayNumeros);

        foreach ($arrayNumeros as $numero => $valor) {
            echo "$valor\n,";
        }
        


    ?>
    
</body>
</html>