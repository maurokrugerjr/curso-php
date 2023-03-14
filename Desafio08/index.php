<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
</head>
<body>

    <form action="index.php">

        <label for="numero">Digite aqui o numero de vezes :</label>
        <input type="number" name="numeroX" id="idNumeroX">
        <input type="submit" value="Calcular">


    </form>
    <?php 

        $numeroA = $_GET["numeroX"];

        for ($rep = 1; $rep <= $numeroA; $rep++){

            echo "$rep - SOL<br>";

        }

    ?>

</body>
</html>