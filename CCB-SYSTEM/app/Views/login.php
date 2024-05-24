<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/login.css') ?>">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js" defer></script>
</head>
<body>
    <header>
        <nav>
            <h1><i class="bi bi-house"></i></h1>
        </nav>
    </header>
    <main>
        <?= form_open('login_submit') ?>
            <div class="main-form-title">
                <h2>LOGIN</h2>
            </div>
            <div class="main-form-email">
                <label for="email">EMAIL:</label>
                <input class="main-form-input" id="email" type="email" placeholder="Digite seu email" name="email">
            </div>
            <div class="main-form-password">
                <label for="password">SENHA:</label>
                <input class="main-form-input" id="password" type="password" placeholder="Digite sua senha" name="senha">
            </div>
            <input id="main-form-submit" type="submit" value="LOGAR">
        <?= form_close() ?>
    </main>
</body>