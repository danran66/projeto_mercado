<h1>Editar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Descrição do Produto</label>
        <input type="text" name="descricao_prod" value="<?php
        print $row->descricao_prod;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estoque Inicial</label>
        <input type="text" name="estoq_inicial" value="<?php
        print $row->estoq_inicial;?>"class="form-control">
    </div>
    <div class="mb-3">
        <label>Estoque Atual</label>
        <input type="text" name="estoq_atual" value="<?php
        print $row->estoq_atual;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Fornecedor</label>
        <input type="text" name="nome_fornecedor" value="<?php
        print $row->nome_fornecedor;?>"class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor de Compra</label>
        <input type="text" name="preco_compra" value="<?php
        print $row->preco_compra;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor de Venda</label>
        <input type="text" name="preco_venda"  value="<?php
        print $row->preco_venda;?>"class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>