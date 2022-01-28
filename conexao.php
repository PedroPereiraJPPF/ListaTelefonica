<?php

session_start();

global $pdo;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=crudpdo", "root", "");
} catch (Exception $e) {
    echo "erro generico: " . $e;
} catch (PDOException $e) {
    echo "erro no banco: " . $e;
}
