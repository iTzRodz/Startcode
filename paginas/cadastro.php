<?php
    // function validarCPF($cpf)
    // {
    //     $cpf = preg_replace("/[^0-9]/", "", $cpf);
    //     $lenCpf = strlen($cpf);
        
    //     if($cpf >=11) {
    //         if ($lenCpf === 11) {
    //             $cpfFormatado = substr($cpf, 0, 3) . "." .
    //                             substr($cpf, 3, 3) . "." .
    //                             substr($cpf, 6, 3) . "." .
    //                             substr($cpf, 9, 2);
    //         }
    //         return $cpfFormatado;
    //     } else {
    //         return "Documento invalido";
    //     }
    // }
// $cpf = $_POST['cpf'];
include_once('C:\xampp\htdocs\StartCode\paginas\ValidarCPF.php');
if(isset($_POST['btncadastro'])) {
    
    include_once('C:\xampp\htdocs\StartCode\config.php');
    
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['data-nasc'];
    $cpf = validarCPF($_POST['cpf']);
    var_dump($cpfFormatado = validarCPF($_POST['cpf']));  
    $sexo = $_POST['sexo'];
    $telefone = $_POST['tel'];

    $result = mysqli_query($conexao, "INSERT INTO Dado_pessoal(email, nome, data_nasc, cpf, sexo, telefone) VALUES('$email', '$nome', '$nascimento', '$cpf', '$sexo', '$telefone')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Obrigado</p>
</body>
</html>