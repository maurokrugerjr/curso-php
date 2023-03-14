<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
</head>
<body>
    <form action="index.php">

        <label for="numero">Digite aqui um numero para descobrir o mes:</label>
        <input type="number" name="numero" id="idNumero">
        <input type="submit" value="Enviar">


    </form>
    <?php 
    
    $numero1 = $_GET["numero"]; 

    switch ($numero1){
        case 1:
            echo "Mês de Janeiro.";
            break;
        case 2: 
            echo "Mês de Fevereiro.";
            break;
        case 3: 
            echo "Mês de Março.";
            break;
        case 4: 
            echo "Mês de Abril.";
            break;
        case 5: 
            echo "Mês de Fevereiro.";
            break;
        case 8: 
            echo "Mês de Agosto.";
            break;
        case 9: 
            echo "Mês de Setembro.";
            break;
        case 10: 
            echo "Mês de Outubro.";
            break;
        case 11: 
            echo "Mês de Novembro.";
            break;
        case 12: 
            echo "Mês de Dezembro.";
            break;
        default: 
            echo "Não é um mês.";
            break;
    }
    
    ?>
    
</body>
</html>