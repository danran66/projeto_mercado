<h1>Editar Fornecedores</h1>
<?php
    $sql = "SELECT * FROM fornecedor WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar_fornecedor" method="POST">
    <input type="hidden" name="acao_fornecedor" value="editar_fornecedor">
    <div class="mb-3">
        <label>Nome do Fornecedor</label>
        <input type="text" name="nome_fornecedor" value="<?php
        print $row->nome_fornecedor;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> CNPJ</label>
        <input type="text" name="cnpj" value="<?php
        print $row->cnpj;?>"class="form-control">
    </div>
    <div class="mb-3">
        <label> Telefone</label>
        <input type="text" name="telefone" value="<?php
        print $row->telefone;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" value="<?php
        print $row->email;?>"class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereco</label>
        <input type="text" name="endereco" value="<?php
        print $row->endereco;?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>