<!DOCTYPE html>
<html>

<?php
include_once('conexao.php');
$select = "SELECT * FROM lista";
$select = $pdo->prepare($select);
$select->execute();
$usuarios = $select->fetchAll();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista Telefonica</title>
    <meta name="description" content="">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Css/Estilo.css">
</head>

<body>
    <nav class="cabecalho">
        <ul class="menu">
            <li><a href="http://localhost/Projeto%20PDO/dadosLogado.php">Meus dados</a></li>
            <li><a href="http://localhost/Projeto%20PDO/registro.php">Registrar</a></li>
            <li><a href="http://localhost/Projeto%20PDO/login.php">Logar</a></li>
        </ul>
    </nav>
    <section class="visualizar">
        <table>
            <tr id="topo">
                <td colspan="3">Telefones disponiveis</td>
            </tr>
            <TR>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
            </TR>
            <?php
            foreach ($usuarios as $usus) {
                echo "<tr>";
                echo "<td>" . $usus['nome'] . "</td>";
                echo "<td>" . $usus['email'] . "</td>";
                echo "<td>" . $usus['telefone'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>
</body>

</html>