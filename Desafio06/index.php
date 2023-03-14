<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
</head>
<body>

    <form action="index.php">

    <h1>Formulário de emprestimo de livros : </h1>
    <label for="nomePessoa">Digite aqui seu nome: </label>
    <input type="text" name="nomePessoa" id="idNomePessoa">
    <label for="nomeLivro">Digite aqui o nome do livro emprestado :</label>
    <input type="text" name="nomeLivro" id="idNomeLivro"><br>
    <label for="verificaAluno">Aluno</label>
    <input type="checkbox" name="verificaAluno" id="idVerificaAluno">
    <label for="verificaProfessor">Professor</label>
    <input type="checkbox" name="verificaProfessor" id="idVerificaProfessor"><br>
    <input type="submit" value="Imprimir recibo comprovante">

    </form>

    <?php 
    
        $nome_livro = $_GET["nomeLivro"];
        $biblioteca_aluno = $_GET["verificaAluno"];
        $biblioteca_professor = $_GET["verificaProfessor"];
        $nome_pessoa = $_GET["nomePessoa"];
        
        
        if (isset($biblioteca_aluno)){
            echo "Olá $nome_pessoa, você é um aluno e tem o prazo de 3 dias úteis para entregar o livro $nome_livro";
        } else{
            echo "Olá $nome_pessoa, você é um professor e tem o prazo de 10 dias úteis para entregar o livro $nome_livro";
        }
    ?>

    
</body>
</html>