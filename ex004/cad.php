<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado processamento</h1>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "sem nome";
            echo "Seja bem vindo Sr(a) <strong>$nome $sobrenome</strong>! "
        ?>
    </main>
    
</body>
</html>