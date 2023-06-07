<?php
$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch ($acao) {

    case 'cadastrar':
        $descricao_prod = $_POST["descricao_prod"];
        $estoq_inicial = $_POST["estoq_inicial"];
        $estoq_atual = $_POST["estoq_atual"];
        $nome_fornecedor = $_POST["nome_fornecedor"];
        $preco_compra = $_POST["preco_compra"];
        $preco_venda = $_POST["preco_venda"];

        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);

        // Verifique se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Crie a consulta SQL para inserir os dados na tabela
        $sql = "INSERT INTO produtos (descricao_prod, estoq_inicial, estoq_atual, nome_fornecedor, preco_compra, preco_venda) VALUES ('$descricao_prod', '$estoq_inicial', '$estoq_atual', '$nome_fornecedor', '$preco_compra', '$preco_venda')";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }

        // Feche a conexão com o banco de dados
        
    break;

    case 'editar':
        $descricao_prod = $_POST["descricao_prod"];
        $estoq_inicial = $_POST["estoq_inicial"];
        $estoq_atual = $_POST["estoq_atual"];
        $nome_fornecedor = $_POST["nome_fornecedor"];
        $preco_compra = $_POST["preco_compra"];
        $preco_venda = $_POST["preco_venda"];
        $id = $_POST["id"];

        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);

        // Crie a consulta SQL para editar os dados na tabela
        $sql = "UPDATE produtos SET 
                    descricao_prod='$descricao_prod',
                    estoq_inicial='$estoq_inicial',
                    estoq_atual='$estoq_atual',
                    nome_fornecedor='$nome_fornecedor',
                    preco_compra='$preco_compra',
                    preco_venda='$preco_venda'
                WHERE id=$id";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Edição realizada com sucesso!";
        } else {
            echo "Erro ao editar: " . $conn->error;
        }

    break;

    case 'excluir':

       $id = isset($_GET["id"]) ? $_GET["id"] : "";

        // Estabeleça a conexão com o banco de dados
        $conn = new mysqli(HOST, USER, PASS, BASE);

        // Crie a consulta SQL para excluir o registro da tabela
        $sql = "DELETE FROM produtos WHERE id=$id";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Exclusão realizada com sucesso!";
        } else {
            echo "Erro ao excluir: " . $conn->error;
        }
        header("Location: index.php");
        exit();

    break;

}