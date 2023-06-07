<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css.css" rel="stylesheet">
    <title>Adega dos Sabores</title>
</head>

<body>

     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><h1>Adega do Sabores</h1>
                        <body>
    <div class="container">
        <div class="product">
            <img src="img/coca1.jpg"class="cocacola" alt="Produto 1">
            <h5>Coca-Cola Lata</h5>
            <p class="price">R$ 4,00</p>
        </div>

        <div class="product">
            <img src="img/fanta.jpg" class="fantalaranja" alt="Produto 2">
            <h5>Fanta Laranja Lata</h5>
            <p class="price">R$ 5,00</p>
        </div>

        <div class="product">
            <img src="img/uva.jpg" class="fantauva" alt="Produto 3">
            <h5>Fanta Uva Lata</h5>
            <p class="price">R$ 6,00</p>
        </div>
        <div class="product">
            <img src="img/toddynho.jpg" class="toddy" alt="Produto 3">
            <h5>Toddynho</h5>
            <p class="price">R$ 4,99</p>
        </div>
        <div class="product">
            <img src="img/pitu.jpg" class="pitu" alt="Produto 3">
            <h5>Pitu Lata</h5>
            <p class="price">R$ 20,00</p>
        </div>
        <div class="product">
            <img src="img/heineken.jpg" class="hei" alt="Produto 3">
            <h5>Heineken </h5>
            <p class="price">R$ 24,99</p>
        </div>
        <div class="product">
            <img src="img/perrier.jpg" class="perrier" alt="Produto 3">
            <h5>Água Perrier </h5>
            <p class="price">R$ 489,99</p>
        </div>
    </div>
</body></a>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=produtos">Cadastro de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=fornecedor">Cadastro de Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar_fornecedor">Listar Fornecedores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                  include("conexao.php");
                  switch (@$_REQUEST["page"]) {
                    case "produtos":
                        include("cadastro_produto.php");
                        break;
                    case "salvar":
                        include("salvar_usuario.php");
                        break;
                    case "editar":
                        include("editar_produto.php");
                        break;
                    case "listar":
                        include("listar_produtos.php");
                        break;
                        
                    include("conexao.php");
                        case "fornecedor":
                        include("cadastro_fornecedor.php");
                        break;
                    case "salvar_fornecedor":
                        include("salvar_fornecedor.php");
                        break;
                    case "editar_fornecedor":
                        include("editar_fornecedor.php");
                        break;
                    case "listar_fornecedor":
                        include("listar_fornecedor.php");
                        break;
                    default:
                        #echo "Bem-vindo ao mundo sem o HEROKU!";
                  }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>