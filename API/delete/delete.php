<?php
    session_start(); // Iniciando uma sessão 
    include_once("../conexao.php"); // Fazendo conexão com o Banco de Dados

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // Pegando o ID do Dado que vai ser apagado 

    $delet = "DELETE FROM NomeDaTebela WHERE NomeDoCampo ='$id'"; // Apagando os dados referente ao ID
    $deletado = mysqli_query($conn, $delet); // Apagando os dados referente ao ID

    if (mysqli_affected_rows($conn)) {
        header("Location: "); // Redirecionando o usuário 
    } else {
        header("Location: "); // Redirecionando o usuário 
    }
