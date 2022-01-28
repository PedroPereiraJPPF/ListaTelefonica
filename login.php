<!DOCTYPE html>
<?php
include_once('conexao.php');
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Css/Estilo.css">
</head>

<body>
    <section class="registro">
        <section class="nome">
            <h1>Login</h1>
        </section>
        <form action="logar.php" method="POST">
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" required><br>
            <label for="senha">Senha</label><br>
            <input type="text" name="senha" id="senha" required><br>
            <input type="submit" id="butao">
        </form>
        <section class="verificar">
            <a href="">Não possui uma conta?</a>
        </section>
</body>

</html>