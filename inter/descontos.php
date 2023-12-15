<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Sabor Divino</title>
</head>

<body>
    <header class="dashboard-logo">
        <img src="../imagens/logo.png" alt="">
    </header>

    <div class="descontos-container">
        <div class="desconto-section">
            <h2>Promoções Temporárias</h2>
            <div class="desconto-card">
                <div class="desconto-card-content">
                    <h3>Desconto de Verão</h3>
                    <p>Desconto especial em produtos de verão.</p>
                    <p><strong>Desconto:</strong> 20%</p>
                    <button>Editar</button>
                    <button>Excluir</button>
                </div>
            </div>


        </div>

        <div class="desconto-section">
            <h2>Cupons de Desconto</h2>
            <div class="desconto-card">
                <div class="desconto-card-content">
                    <h3>CUPOM10</h3>
                    <p>Desconto de R$ 10,00 em qualquer compra.</p>
                    <p><strong>Código:</strong> CUPOM10</p>
                    <button>Editar</button>
                    <button>Excluir</button>
                </div>
            </div>

        </div>

    </div>
    <div class="dashboard-menu">
        <div class="menu-conteudo">
            <header>
                <h1>INTER</h1>
            </header>

            <nav>
                <ul>
                    <li><a href="clientes.php">CLIENTES</a></li>
                    <li><a href="dashboard.php">PEDIDOS</a></li>
                    <li><a href="descontos.php">DESCONSTOS</a></li>
                    <li class="deslogar"><a href="../index.php">DESLOGAR</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>

</html>