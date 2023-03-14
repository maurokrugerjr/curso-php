<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
</head>
<body>
    <form action="index.php">
        <label for="numero">Digite aqui um numero :</label>
        <input type="number" name="num1" id="idNum1">
        <input type="submit" value="Enviar numero">
    </form>

    <?php 

        $numero1 = $_GET["num1"];
        $rep = 1;

        for ($rep ; $rep <= $numero1; $rep++){

            $calc = ($rep * $numero1);
            echo "$rep X $numero1 = $calc <br>";

        }
    
    ?>

</body>
</html>