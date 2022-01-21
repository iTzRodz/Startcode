<?php

// $cpf = validarCPF($_POST['cpf']);
// var_dump($cpfFormatado = validarCPF($_POST['cpf']));  
// include_once('C:\xampp\htdocs\StartCode\paginas\ValidarCPF.php');

if(isset($_POST['btncadastro'])) {
    
    include_once('C:\xampp\htdocs\StartCode\BancoDados\configBanco.php');
    
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['data-nasc'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['tel'];
    
    $result = mysqli_query($conexao, "INSERT INTO Dado_pessoal(email, nome, data_nasc, cpf, sexo, telefone) VALUES('$email', '$nome', '$nascimento', '$cpf', '$sexo', '$telefone')");
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro finalizado</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\StartCode\paginas\estilo\Cadastro-finalizado.css">
</head>
<body>
    <p>Obrigado por se cadastrar em nosso site!!</p>
    <p>Agora você pode entrar em sua conta e acessar nosso conteúdo!<br></p>

    <a href="C:\xampp\htdocs\StartCode\paginas\cadastro.html" target="_blank">Entre em sua conta</a>
</body>
</html> -->