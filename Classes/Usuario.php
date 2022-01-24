<?php
class Usuario 
{
    private $pdo;
    public $msgErro = "";

    public function conectar(string $nome, string $host, string $usuario, string $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname" . $nome."host=".$host, $usuario, $senha)
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
        
    }

    public function cadastrar($email, $nome, $nascimento, $cpf, $sexo, $telefone)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM Dado_pessoal WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
    }

    public function logar($email, $senha)
    {

    }
}

>?