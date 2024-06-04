<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=3.0" />
    <title>Consulta</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/padrao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/infosconsult.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/verification.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/modal.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/header.css') ?>">
    <script src="<?=base_url('assets/js/modal.js')?>" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
  <section id="modal-container" class="modal-background invisible"></section>
        <div id="modal-login-div" class="modal-login invisible">
            <section class="modal-info">
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
            <h1>Consulta</h1>
            <a class="icon-fixed" href="<?= site_url('main')?>"><i class="bi bi-house"></i></a>
        </nav>
    </header>
    <main>
      <h1>Informações pessoais do voluntário</h1>
      <?= form_open('atualizando') ?>
        <section class="container-box">
          <div class="container-1">
            <div id="col1">
              <label for="nome">Nome voluntário</label>
              <input type="text" name="nome" id="nome" class="default" value="<?= $nome ?>"/>

              <label for="rg">RG</label>
              <input type="text" name="rg" id="rg" class="default" value="<?= $rg ?>"/>

              <label for="dataNasc">Data de nascimento</label>
              <input type="date" name="dataNasc" id="dataNasc" class="default" value="<?= $data_nasc ?>"/>

              <label for="nomeCongreg">Nome da congregação</label>
              <input type="text" name="nomeCongreg" id="nomeCongreg" class="default" value="<?= $nome_congreg ?>"/>
            </div>
            <div class="col2">
              <label for="end">Endereço</label>
              <input type="text" name="end" id="end" class="default" value="<?= $endereco ?>"/>

              <label for="bairro">Bairro</label>
              <input type="text" name="bairro" id="bairro" class="default" value="<?= $bairro ?>"/>

              <div class="n-cep">
                <div class="n-cep-item">
                  <label for="num">Número</label>
                  <input type="number" name="num" id="num" class="default" value="<?= $numeroEnde ?>"/>
                </div>
                <div class="n-cep-item">
                  <label for="cep">CEP</label>
                  <input type="text" name="cep" id="cep" class="default" value="<?= $cep ?>"/>
                </div>
              </div>

              <label for="ctt-fixo">Número de contato</label>
              <input type="tel" name="ctt-fixo" id="ctt-fixo" class="default" value="<?= $celular ?>"/>

            </div>
            <div class="col3">
              <label for="gpTrabalho">Grupo de trabalho</label>
              <select name="gpTrabalho" id="select-1" class="default">
                <option selected><?= $grupo ?></option>
              </select>

              <label for="formAcad">Formação acadêmica</label>
              <input type="text" name="formAcad" id="formAcad" class="default" value="<?= $formacao ?>"/>
            </div>
          </div>
          <div class="container-2">
            <div class="col4">
              <img src="../img/exemplo-user.png" alt="foto de perfil" />
              <label for="disp1">Disponibilidade voluntário 1</label>
              <input type="text" name="disp1" id="disp1" class="default" value="<?= $disp1 ?>"/>
              <label for="disp2">Disponibilidade voluntário 2</label>
              <input type="text" name="disp2" id="disp2" class="default" value="<?= $disp2 ?>"/>
              <label for="disp3">Disponibilidade voluntário 3</label>
              <input type="text" name="disp3" id="disp3" class="default" value="<?= $disp3 ?>"/>
            </div>
          </div>
        </section>
        <section class="box-btn" id="box-btn-section-end">
          <input type="hidden" name="id" value="<?= $id ?>">
          <button class="btn-up" id="submit-info" type="submit">Atualizar</button>
        </section>
        <?= form_close() ?>
      <div class="box-btn">
        <button class="MaisInfos" id="MaisInfos">Mais informações</button>
        <a href="<?= site_url('consultVolu') ?>"><button class="btn-back">Voltar</button></a>
      </div>
    </main>
  </body>
</html>
