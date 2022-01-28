<?php
include_once('conexao.php');
require('Usuario.class.php');

$dados = new Usuario();

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if ($dados->login($email, $senha) == true) {
        if (isset($_SESSION['id'])) {
            header('location: index.php');
        } else {
            header('location: login.php');
        }
    } else {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
