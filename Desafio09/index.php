<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
</head>
<body>

    <form action="index.php">

        <label for="numeros">Digite aqui o primeiro numero:</label>
        <input type="number" name="num1" id="idNum1"><br><br>
        <label for="numeros">Digite aqui o segundo numero:</label>
        <input type="number" name="num2" id="idNum2"><br><br>
        <label for="numeros">Digite aqui o terceiro numero:</label>
        <input type="number" name="num3" id="idNum3"><br><br>
        <label for="numeros">Digite aqui o quarto numero:</label>
        <input type="number" name="num4" id="idNum4"><br><br>
        <label for="numeros">Digite aqui o quinto numero:</label>
        <input type="number" name="num5" id="idNum5"><br><br>
        <label for="numeros">Digite aqui o sexto numero:</label>
        <input type="number" name="num6" id="idNum6"><br><br>
        <label for="numeros">Digite aqui o sétimo numero:</label>
        <input type="number" name="num7" id="idNum7"><br><br>
        <label for="numeros">Digite aqui o oitavo numero:</label>
        <input type="number" name="num8" id="idNum8"><br><br>
        <label for="numeros">Digite aqui o nono numero:</label>
        <input type="number" name="num9" id="idNum9"><br><br>
        <label for="numeros">Digite aqui o décimo numero:</label>
        <input type="number" name="num10" id="idNum10"><br><br>
        <input type="submit" value="Enviar numeros">

    </form>

    <?php 

        $numero_1 = $_GET["num1"];
        $numero_2 = $_GET["num2"];
        $numero_3 = $_GET["num3"];
        $numero_4 = $_GET["num4"];
        $numero_5 = $_GET["num5"];
        $numero_6 = $_GET["num6"];
        $numero_7 = $_GET["num7"];
        $numero_8 = $_GET["num8"];
        $numero_9 = $_GET["num9"];
        $numero_10 = $_GET["num10"];


        $arrayNumeros = [intval($numero_1), intval($numero_2), intval($numero_3), intval($numero_4), intval($numero_5), intval($numero_6), intval($numero_7), intval($numero_8), intval($numero_9), intval($numero_10)]; 

    


        function mostraNumero ($array){
            if ($array[0] == 0){
                exit;
            }
            foreach ($array as $numero) {
                ($numero < 0) ? $valorNegativo[]=$numero : $valorPositivo[]=$numero;
            } 
            echo "Quantidade de numeros negativos é : " . count($valorNegativo) . "<br>";
            echo "Quantidade de numeros postivos é : " . count($valorPositivo);
        }
        mostraNumero($arrayNumeros);

        //count () função para somar itens da array
    
    



        


    
    ?>


    
</body>
</html>