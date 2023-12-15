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

    <div class="relatorios-container">
        <div class="relatorios-section">
            <h2>Relatório de Vendas</h2>
            <div class="relatorios-card">
                <div class="relatorios-card-content">
                    <h3>Total de Vendas</h3>
                    <p><strong>Valor:</strong> R$ 5.000,00</p>
                    <p><strong>Data:</strong> 01/01/2023 - 31/01/2023</p>
                    <button>Detalhes</button>
                </div>
            </div>

        </div>

        <div class="relatorios-section">
            <h2>Produtos Mais Vendidos</h2>
            <div class="relatorios-card">
                <div class="relatorios-card-content">
                    <h3>Produto 1</h3>
                    <p><strong>Total de Vendas:</strong> 50 unidades</p>
                    <p><strong>Receita Gerada:</strong> R$ 2.500,00</p>
                    <button>Detalhes</button>
                </div>
            </div>

        </div>
    </div>

    <div class="dashboard-menu">
        <div class="menu-conteudo">
            <header>
                <h1>ADMIN</h1>
            </header>

            <nav>
                <ul>
                    <li><a href="produtos.php">PRODUTOS</a></li>
                    <li><a href="clientes.php">CLIENTES</a></li>
                    <li><a href="dashboard.php">PEDIDOS</a></li>
                    <li><a href="relatorios.php">RELATÓRIOS</a></li>
                    <li><a href="descontos.php">DESCONSTOS</a></li>
                    <li class="deslogar"><a href="../index.php">DESLOGAR</a></li>
                </ul>
            </nav>
        </div>

    </div>

</body>

</html>