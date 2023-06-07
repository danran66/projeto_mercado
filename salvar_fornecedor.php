<?php
$acao_fornecedor = isset($_GET['acao_fornecedor']) ? $_GET['acao_fornecedor'] : '';

switch ($acao_fornecedor) {

    case 'cadastrar_fornecedor':
        $nome_fornecedor = $_POST["nome_fornecedor"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];

        // Estabeleça a conexão com o banco de dados
        $conn = new MySQLi(HOST,USER,PASS,BASE);

        // Verifique se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Crie a consulta SQL para inserir os dados na tabela
        $sql = "INSERT INTO fornecedor (nome_fornecedor, cnpj, telefone, email, endereco) VALUES ('$nome_fornecedor', '$cnpj', '$telefone', '$email', '$endereco')";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }

        // Feche a conexão com o banco de dados
        $conn->close();
    break;

    case 'editar_fornecedor':
    $nome_fornecedor = $_POST["nome_fornecedor"];
    $cnpj = $_POST["cnpj"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $id = $_POST["id"];

    // Estabeleça a conexão com o banco de dados
    $conn = new MySQLi(HOST,USER,PASS,BASE);

    // Crie a consulta SQL para editar os dados na tabela
    $sql = "UPDATE fornecedor SET 
                nome_fornecedor='$nome_fornecedor',
                cnpj='$cnpj',
                telefone='$telefone',
                email='$email',
                endereco='$endereco'
            WHERE id=$id";

    // Execute a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Edição realizada com sucesso!";
    } else {
        echo "Erro ao editar: " . $conn->error;
    }

break;


    case 'excluir_fornecedor':
        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);

        // Crie a consulta SQL para excluir o registro da tabela
        $sql = "DELETE FROM fornecedor WHERE id=$id";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Exclusão realizada com sucesso!";
        } else {
            echo "Erro ao excluir: " . $conn->error;
        }

    break;

}