<h1>Cadastro de Fornecedores</h1>
<link href="css.css" rel="stylesheet"></link>

<form action="?page=salvar_fornecedor" method="POST">
    <input type="hidden" name="acao_fornecedor" value="cadastrar_fornecedor">
    <div class="mb-3">
        <label>Nome do Fornecedor</label>
        <input type="text" name="nome_fornecedor" class="form-control">
    </div>
    <div class="mb-3">
        <label>CNPJ</label>
        <input type="text" name="cnpj" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</div></label>
        <input type="text" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereco</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>