<h1>Listar Fornecedores</h1>

<?php

    $conn = new mysqli(HOST, USER, PASS, BASE);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM fornecedor";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>Nome do Fornecedor</th>";
        echo "<th>CNPJ</th>";
        echo "<th>Telefone</th>";
        echo "<th>Email</th>";
        echo "<th>Endereco</th>";
        echo "<th>Edicao</th>";
        echo "</tr>";

        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->nome_fornecedor . "</td>";
            echo "<td>" . $row->cnpj . "</td>";
            echo "<td>" . $row->telefone . "</td>";
            echo "<td>" . $row->email . "</td>";
            echo "<td>" . $row->endereco . "</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=editar_fornecedor&id=" .$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Deseja Excluir?')){location.href='?page=salvar_fornecedor&acao_fornecedor=excluir_fornecedor&id=" .$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }

    $conn->close();
?>