<?php

session_start();

global $pdo;

$host = 'localhost';
$user = "root";
$dbname = 'estudos';
$senha = '12345678';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $senha);
} catch (Exception $e) {
    echo "erro generico: " . $e;
} catch (PDOException $e) {
    echo "erro no banco: " . $e;
}
