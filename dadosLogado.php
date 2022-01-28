<!DOCTYPE html>
<html lang="en">
<?php
include_once('conexao.php');
if (isset($_SESSION['id'])) {
    $select = "SELECT * FROM lista WHERE id = :id";
    $select = $pdo->prepare($select);
    $select->bindValue(":id", $_SESSION['id']);
    $select->execute();
    $dados = $select->fetch();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/usuario.css">
    <title>Document</title>
</head>

<body>
    <div class="user">
        <h3>Nome: <?php echo $dados['nome'] ?></h3>
        <h3>Email: <?php echo $dados['email'] ?></h3>
        <h3>Telefone: <?php echo $dados['telefone'] ?></h3><br>
    </div>
</body>

</html>