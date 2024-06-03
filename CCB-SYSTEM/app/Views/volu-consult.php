<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CCB</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/voluconsultation.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/modal.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/verification.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/header.css') ?>">
    <script src="<?= base_url('assets/js/modal.js') ?>" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section id="modal-container" class="modal-background invisible"></section>
        <div id="modal-login-div" class="modal-login invisible">
            <section class="modal-info">
                <div class="modal-info-person">
                    <?php foreach($users as $user):?>
                    <p><?= $user->nome ?></p>
                    <p><?= $user->rg ?></p>
                    <p><?= $user->numero ?></p>
                    <?php endforeach;?>
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
        <nav class="header-container">
            <h1>Consulta de voluntário</h1>
            <a class="icon-fixed" href="<?= site_url('main')?>"><i class="bi bi-house"></i></a>
        </nav>
    </header>
    <main>
        <div class="main-title">
            <h2>Consulta de voluntários</h2>
        </div>
        <div class="search-bar">
            <?= form_open('consultPesquisa') ?>
            <input class="search-bar-input" type="text" placeholder="Digite o nome do voluntário" name="nomePesquisado">
            <button class="search-bar-button" id="search-event" type="submit">Pesquisar</button>
            <?= form_close() ?>
        </div>
        <section class="main-sec">
            <table>
                <tbody>
                    <?php foreach ($users as $user):?>
                    <tr class="linha-consult">
                        <p class="sec-volu-name"><?= $user->nome ?></p>
                        <a href="<?= site_url('consulta/'.$user->id) ?>"><button class="sec-volu-button" >Visualizar</button></a>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            
        </section>
    </main>
</body>
</html>