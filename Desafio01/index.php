<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $soma = $numero1 + $numero2; 

        if ($soma > 20){
            $resultado = $soma + 8;
        } else {
            $resultado = $soma - 5;
        }
        echo "O resultado é : $resultado";
    ?>
</body>
</html>