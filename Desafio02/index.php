<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>
<body>

    <?php 
        $numero = $_GET["num"];
        $div1 = $numero / 10;
        $div2 = $numero / 5;
        $div3 = $numero / 2;

        if (is_int($div1)){
            echo "O $numero é divisível por 10.";
        }
        elseif (is_int($div2)){
            echo "O $numero é divisível por 5";
        }
        elseif (is_int($div3)){
            echo "O $numero é divisível por 2";
        }
        else {
            echo "O $numero não é divisível por 10, 5 ou 2.";
        }
    ?>


    
</body>
</html>