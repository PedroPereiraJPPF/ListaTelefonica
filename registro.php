<!DOCTYPE html>
<html lang="pt-br">

<?php
include_once('conexao.php');
$register = $pdo->prepare("INSERT INTO lista(nome, telefone, email, senha)
VALUES (:nome, :telefone, :email, :senha)");
if (isset($_SESSION['id'])) {
    header('location: index.php');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="no-store">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Estilo.css">
    <title>Lista Telefonica</title>
</head>

<body>
    <?php
    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $register->bindValue(':nome', $nome);
        $register->bindParam(':telefone', $telefone);
        $register->bindParam(':email', $email);
        $register->bindParam(':senha', md5($senha));
        $register->execute();
        header('location:index.php');
        exit;
    }
    ?>
    <section class="registro">
        <section class="nome">
            <h1>Registro</h1>
        </section>
        <form action="" method="POST">
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" required><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" required><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" required><br>
            <label for="senha">Senha</label><br>
            <input type="text" name="senha" id="senha" required><br>
            <input type="submit" id="butao">
        </form>
        <section class="verificar">
            <a href="">Já possui uma conta?</a>
        </section>
    </section>
</body>

</html>