<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Sabor Divino</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="container-logo">
                <a href="#">
                    <img src="../imagens/logo.png" alt="">
                    <h1>Sabor Divino</h1>
                </a>
            </div>
            <div class="container-nav">
                <ul>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="lojas.php">Lojas</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="login">
                <a href="login.php">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                </a>
            </div>

        </div>
    </header>

    <main>
        <div class="contato-container">
            <h2>Entre em Contato</h2>
            <p>Ficamos felizes em ouvir de você. Preencha o formulário abaixo para entrar em contato conosco.</p>

            <form class="contato-form" action="#" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>
    </main>

</body>

</html>