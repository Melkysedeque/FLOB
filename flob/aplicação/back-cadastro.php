<?php
// Verifica se o formulário foi enviado

    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $profissao = $_POST["profissao"];

    // Conecta ao banco de dados (substitua as informações de conexão conforme necessário)
    $servername = "localhost";
    $username = "root";
    $password = "Abre@qui00";
    $dbname = "cadastro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Prepara a consulta SQL
    $sql = "INSERT INTO profissionais (nome, cpf, profissao) VALUES ('$nome', '$cpf', '$profissao')";

    // Executa a consulta
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
?>