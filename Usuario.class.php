<?php
class Usuario
{


    public function login($email, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM lista WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'];
            $_SESSION['telefone'] = $dado['telefone'];
            $_SESSION['email'] = $dado['email'];
            return true;
        } else {
            return false;
        }
    }
}
