<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/padrao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/cad-first.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/header.css') ?>">
</head>
<body>
    <header>
        <nav class="header-container">
            <h1>Cadastro  1/3</h1>
            <a class="icon-fixed" href="<?= site_url('main')?>"><i class="bi bi-house"></i></a>
        </nav>
    </header>
    <main>
        <h1>INFORMAÇÕES PESSOAIS DO VOLUNTÁRIO</h1>
        <form method="post">
            <section class="container-box">
            <div class="container-inputs">
                <label for="rg">RG</label>
                <input type="text" name="rg" id="rg" placeholder="Digite o RG">
                
                <label for="rg">ENDEREÇO</label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite o endereço">
                
                <label for="rg">COMPLEMENTO</label>
                <input type="text" name="comp" id="comp" placeholder="Digite o complemento">
            
                <label for="dataNasc">DATA DE NASCIMENTO</label>
                <input type="date" name="dataNasc" id="dataNasc">
            </div>
            <div class="container-inputs">
                
                <label for="nome">NOME VOLUNTÁRIO</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome">
                
                <label for="bairro">BAIRRO</label>
                <input type="text" name="bairro" id="bairro" placeholder="Digite o bairro">
                
                <label for="ctt-fixo">CONTATO FIXO</label>
                <input type="tel" name="ctt-fixo" id="ctt-fixo" placeholder="Digite o telefone fixo">
                
                <label for="congregacao">NOME DA CONGREGAÇÃO</label>
                <input type="text" name="congregacao" id="congregacao" placeholder="Digite o nome da congregação">
            
            </div>
            <div class="container-inputs">
                <label for="gruposDeTrabalho">GRUPO DE TRABALHO</label>
                <select id="gruposDeTrabalho">
                    <option >MANUTENÇÃO</option>
                    <option >#</option>
                    <option >#</option>
                    <option >#</option>
                </select>

                <div class="container-num-cep">
                    <div class="container-num-cep-item">
                        <label for="numCasa">NÚMERO</label>
                        <input type="number" name="numCasa" id="numCasa">
                    </div>
                    <div class="container-num-cep-item">
                        <label for="cep">CEP</label>
                        <input type="number" name="cep" id="cep">
                    </div>
                </div>
                
                <label for="ctt-celular">CONTATO CELULAR</label>
                <input type="tel" name="ctt-celular" id="ctt-celular">

                <label for="ftperfil">ADICIONE UMA FOTO DE PERFIL</label>
                <label class="upload" for="ftperfil">UPLOAD</label>
                <input type="file" name="ftperfil" id="ftperfil">
            </div>
            </section>
            <input class="btn-enviar" type="submit" value="AVANÇAR" id="primeiro-cad">
        </form>
            <button class="btn-voltar">VOLTAR</button>
    </main>
</body>
</html>