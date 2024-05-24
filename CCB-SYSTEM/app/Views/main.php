<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainpage</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/padrao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/mainpage.css') ?>">
</head>
<body>
    <header>
        <nav class="header-container">
            <h1>MAINPAGE</h1>
        </nav>
    </header>
    <main>
        <section class="first-content">
            <h2>COMO VAMOS PROSSEGUIR?</h2>
        </section>
        <section class="second-content">
            <a href="./cad-first.html">
                <div class="btn">
                    <img class="btn-img" src="<?= base_url('assets/img/cadastro.png') ?>" alt="Imagem botão cadastrar">
                    <h1>CADASTRAR VOLUNTÁRIO</h1>
                </div>
            </a>

            <a href="./infosconsult.html">
                <div class="btn">
                    <img class="btn-img" src="<?= base_url('assets/img/pesquisa.png') ?>" alt="Imagem botão Consultar">
                    <h1>CONSULTAR VOLUNTÁRIO</h1>
                </div>
            </a>
        </section>
        
    </main>
</body>
</html>