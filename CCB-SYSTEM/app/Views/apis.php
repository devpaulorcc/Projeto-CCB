<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPIS</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/epis.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/modal.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/verification.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section id="modal-container" class="modal-background invisible"></section>
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
            <h1>EPIS NECESSÁRIOS ENTREGUES</h1>
        </div>
        <form>
            <div>
                <label for="protective-goggles">Óculos de proteção</label>
                <select id="protective-goggles">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
                <label for="filtering-mask">Óculos de proteção</label>
                <select id="filtering-mask">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
                <label for="scrap-glove">Luva de raspa</label>
                <select id="scrap-glove">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
                <label for="protective-helmet">Capacete de proteção</label>
                <select id="protective-helmet">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
            </div>
            <div>
                <label for="protective-boot">Bota de proteção</label>
                <select id="protective-boot">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
                <label for="hearing-protection">Protetor auricular</label>
                <select id="hearing-protection">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
                <label for="seat-belt">Cinto de segurança</label>
                <select id="seat-belt">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
                <label for="special-uniform">Uniforme especial</label>
                <select id="special-uniform">
                    <option value="default" selected>Selecione</option>
                    <option value="yes">SIM</option>
                    <option value="no">NÃO</option>
                </select>
            </div>
        </form>
        <div id="div-button">
            <button id="button-update">Atualizar</button>
            <button id="button-back">Voltar</button>
        </div>
    </main>
</body>
</html>