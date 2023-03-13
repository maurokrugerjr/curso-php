<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado desafio 03</title>
</head>
<body>
    <?php 
        $nomePessoa = $_GET["nome"];
        $sexoMascPessoa = $_GET["sexoMasc"];
        $sexoFemPessoa = $_GET["sexoFem"];
        $idadePessoa = $_GET["idade"];

        if (isset($sexoFemPessoa)  && $idadePessoa <= 25) {
            echo "Parabéns, $nomePessoa você foi ACEITA!";
        }else {
            echo "Infelizmente você não foi aceito. ";
        }
    ?>
    
</body>
</html>