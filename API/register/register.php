<?php
include_once("../conexao.php"); // Fazendo a ligamento com o arquivo "conexao.php" //
$ValFormEmail = $_POST['CampoForm']; // Pegando o email do form HTML // 
$ValFormCPF = $_POST['CampoForm']; // Pegando o CPF do form HTML // 
$sql = "SELECT * FROM TabelaDoBanco WHERE CampoEmail = '$ValFormEmail' OR CampoCPF = '$ValFormCPF'"; // fazendo a busca no banco de dados //
$valida = mysqli_query($conn, $sql);
if (mysqli_num_rows($valida) == 1) { // Camparando se o email existe no banco ou não //
    // Se existir dará esse erro
    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/'>
            <script type=\"text/javascript\">
                alert(\"Falha no cadastrado.\");
            </script>
        ";
} else {
    // Caso o email ou CPF não exista no banco //
    $ValForm = $_POST['CampoForm']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //
    $ValForm = $_POST['CampoForm'];
    $ValForm = $_POST['CampoForm'];
    $ValForm = $_POST['CampoForm'];
    $ValForm = $_POST['CampoForm'];
    $ValForm = $_POST['CampoForm']; // Pegandos os dados dos formularios no metodo POST e passandos os valores as variaveis //

    // Colocandos os dados na tabela no banco de dados //
    $user = "INSERT INTO TabelaDoBanco(CampoDaTebela, CampoDaTebela, CampoDaTebela, CampoDaTebela, CampoDaTebela, CampoDaTebela, CampoDaTebela) VALUES ('$ValForm', '$ValForm', '$ValForm', '$ValForm', '$ValForm', '$ValForm', '$ValForm')";
    $user_finais = mysqli_query($conn, $user);

    // Informando se foi cadastrado ou não //
    if (mysqli_affected_rows($conn) != 0) {
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/'>
            <script type=\"text/javascript\">
                alert(\"Cadastrado com sucesso.\");
            </script>
        ";
    }
}
