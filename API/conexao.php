<?php

$username = ""; // Colocar o usuário do seu banco de dados
$password = ""; // Colocar a senha do seu banco de dados, caso não tenha deixe vazio

try {
  $conn = new PDO('mysql:host=ServidorDoBanco;dbname=NomeBanco', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>