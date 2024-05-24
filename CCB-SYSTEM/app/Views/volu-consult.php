<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CCB</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/voluconsultation.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/modal.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/verification.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section id="modal-container" class="modal-background invisible"></section>
        <div id="modal-login-div" class="modal-login invisible">
            <section class="modal-info">
                <div class="modal-info-person">
                    <p>Nome voluntário</p>
                    <p>RG</p>
                    <p>Comum Congregação</p>
                </div>
                <div class="modal-info-icon">
                    <img src="" alt="Foto de perfil">
                </div>
            </section>
            <section class="modal-choice">
                <button>Informações Pessoais</button>
                <button>Epis</button>
                <button>Certificações</button>
            </section>
            <section class="modal-last-button">
                <div class="modal-button">
                    <button id="modal-button-delete">DELETAR</button>
                    <button>IMPRIMIR</button>
                </div>
                <div>
                    <button id="modal-button-back">VOLTAR</button>
                </div>
            </section>
        </div>
        <div id="modal-verification" class="modal-verification-div invisible">
            <form id="modal-verification-form">
                <h3>VERIFICAÇÃO</h3>
                <label for="email">EMAIL</label>
                <input type="email" placeholder="Digite seu email aqui">
                <label for="password">SENHA</label>
                <input type="password" placeholder="Digite sua senha aqui">
                <input id="modal-verification-form-submit" type="submit" value="CONFIRMAR">
            </form>
            <div>
                <button id="modal-verification-form-back"><i class="bi bi-box-arrow-left"></i> VOLTAR</button>
            </div>
        </div>
    <header>
        <nav>
            <h1><i class="bi bi-house"></i></h1>
        </nav>
    </header>
    <main>
        <div class="main-title">
            <h2>Consulta de voluntários</h2>
        </div>
        <div class="search-bar">
            <a href="./mainpage.html"><button class="sec-volu-button"><i class="bi bi-box-arrow-left"></i> Sair</button></a>
            <input class="search-bar-input" type="text" placeholder="Digite o nome do voluntário">
            <button class="search-bar-button" id="search-event">Pesquisar</button>
        </div>
        <section class="main-sec">
            <div class="main-sec-volu">
                <p class="sec-volu-name">Paulo Ricardo Cardoso de Camargo</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
            <div class="main-sec-volu">
                <p class="sec-volu-name">Alexandre Vieira Santana</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
            <div class="main-sec-volu">
                <p class="sec-volu-name">Marcos Costa do Java</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
            <div class="main-sec-volu">
                <p class="sec-volu-name">Nome completo do voluntário</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
            <div class="main-sec-volu">
                <p class="sec-volu-name">Nome completo do voluntário</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
            <div class="main-sec-volu">
                <p class="sec-volu-name">Nome completo do voluntário</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
            <div class="main-sec-volu">
                <p class="sec-volu-name">Nome completo do voluntário</p>
                <button class="sec-volu-button">Visualizar</button>
            </div>
        </section>
    </main>
</body>
</html>