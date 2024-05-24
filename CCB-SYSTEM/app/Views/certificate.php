<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Certificados</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/certificatequery.css') ?>">
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
            <h1>VIGÊNCIA DE CERTIFICAÇÃO E RECICLAGEM</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>NR'S</th>
                    <th>DATA INÍCIO</th>
                    <th>DATA VENCIMENTO</th>
                    <th>DATA RECICLAGEM</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NR10</td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><span class="state-certificate state-defeated">VENCIDA</span></td>
                </tr>
                <tr>
                    <td>NR33</td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><span class="state-certificate state-active">ATIVA</span></td>
                </tr>
                <tr>
                    <td>NR35</td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><span class="state-certificate state-active">ATIVA</span></td>
                </tr>
                <tr>
                    <td>ASO</td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><input type="text" placeholder="XX/XX/XXXX" disabled></td>
                    <td><span class="state-certificate state-pending">PENDENTE</span></td>
                </tr>
            </tbody>
        </table>
        <button id="button-edit">EDITAR</button>
    </main>
</body>
</html>