<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Sabor Divino</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="container-logo">
                <a href="#">
                    <img src="./imagens/logo.png" alt="">
                    <h1>Sabor Divino</h1>
                </a>
            </div>
            <div class="container-nav">
                <ul>
                    <li><a href="/pages/produtos.php">Produtos</a></li>
                    <li><a href="/pages/lojas.php">Lojas</a></li>
                    <li><a href="/pages/contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="login">
                <a href="pages/login.php">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                </a>
            </div>

        </div>
    </header>

    <main>
        <section class="banner">
            <img src="./imagens/banner.png" alt="">
        </section>

        <div class="cidades">
            <h3>Saiba onde encontrar a loja mais próxima</h3>
            <form action="">
                <select class="custom-select" id="">
                    <option selected="">Estado</option>
                </select>

                <select class="custom-select" id="">
                    <option selected="">Cidade</option>
                </select>

                <select class="custom-select" id="">
                    <option selected="">Bairro</option>
                </select>
            </form>
        </div>

        <section class="doces">
            <h1>Conheça todos os nossos sabores</h1>
            <div class="doces-cards">
                <div class="cards">
                    <img src="../imagens/bolos.png" alt="">
                    <h1>BOLOS</h1>
                </div>
                <div class="cards">
                    <img src="../imagens/salgados.png" alt="">
                    <h1>SALGADOS</h1>
                </div>
                <div class="cards">
                    <img src="../imagens/festas.png" alt="">
                    <h1>KIT FESTAS</h1>
                </div>
                <div class="cards">
                    <img src="../imagens/doces.png" alt="">
                    <h1>DOCES</h1>
                </div>
            </div>
            </div>
        </section>
    </main>


</body>

</html>