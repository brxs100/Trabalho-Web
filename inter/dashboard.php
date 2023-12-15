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

    <div class="dashboard-container">
        <div class="stats">
            <div class="stat-box">
                <h2>Total de Pedidos</h2>
                <p>120</p>
            </div>
            <div class="stat-box">
                <h2>Receita Mensal</h2>
                <p>R$ 2.500,00</p>
            </div>
            <div class="stat-box">
                <h2>Produtos em Estoque</h2>
                <p>50</p>
            </div>
        </div>

        <h2>Últimos Pedidos</h2>
        <table class="orders-table">
            <thead>
                <tr>
                    <th>ID do Pedido</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>João Silva</td>
                    <td>R$ 50,00</td>
                    <td>Processando</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Maria Oliveira</td>
                    <td>R$ 30,00</td>
                    <td>Entregue</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Carlos Santos</td>
                    <td>R$ 45,00</td>
                    <td>Em andamento</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Ana Pereira</td>
                    <td>R$ 60,00</td>
                    <td>Aguardando pagamento</td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>Fernanda Lima</td>
                    <td>R$ 25,00</td>
                    <td>Concluído</td>
                </tr>
                <tr>
                    <td>006</td>
                    <td>Ricardo Oliveira</td>
                    <td>R$ 55,00</td>
                    <td>Processando</td>
                </tr>
                <tr>
                    <td>007</td>
                    <td>Juliana Silva</td>
                    <td>R$ 40,00</td>
                    <td>Entregue</td>
                </tr>
                <tr>
                    <td>008</td>
                    <td>Luisa Oliveira</td>
                    <td>R$ 70,00</td>
                    <td>Em andamento</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="dashboard-menu">
        <div class="menu-conteudo">
            <header>
                <h1>INTER</h1>
            </header>

            <nav>
                <ul>
                    <li><a href="/inter/clientes.php">CLIENTES</a></li>
                    <li><a href="/inter/dashboard.php">PEDIDOS</a></li>
                    <li><a href="descontos.php">DESCONSTOS</a></li>
                    <li class="deslogar"><a href="../index.php">DESLOGAR</a></li>
                </ul>
            </nav>
        </div>
    </div>

</body>

</html>