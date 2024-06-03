<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=3.0" />
    <title>Consulta</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/padrao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/infosconsult.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/header.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <header>
        <nav class="header-container">
            <h1>Consulta</h1>
            <a class="icon-fixed" href="<?= site_url('main')?>"><i class="bi bi-house"></i></a>
        </nav>
    </header>
    <main>
      <h1>informações pessoais do voluntário</h1>
      <form action="" method="post" id="form">
        <section class="container-box">
          <div class="container-1">
            <div id="col1">
              <label for="rg">rg</label>
              <input type="text" name="rg" id="rg" class="info-input default" value="<?= $rg ?>"/>

              <label for="end">endereço</label>
              <input type="text" name="end" id="end" class="info-input default" value="<?= $endereco ?>"/>

              <label for="dataNasc">data de nascimento</label>
              <input type="date" name="dataNasc" id="dataNasc" class="info-input default" value="<?= $data_nasc ?>"/>
            </div>
            <div class="col2">
              <label for="nome">nome voluntário</label>
              <input type="text" name="nome" id="nome" class="info-input default" value="<?= $nome ?>"/>

              <label for="bairro">bairro</label>
              <input type="text" name="bairro" id="bairro" class="info-input default" value="<?= $bairro ?>"/>

              <label for="ctt-fixo">número de contato</label>
              <input type="tel" name="ctt-fixo" id="ctt-fixo" class="info-input default" value="<?= $celular ?>"/>

              <label for="nomeCongreg">nome da congregação</label>
              <input type="text" name="nomeCongreg" id="nomeCongreg" class="info-input default" value="<?= $nome_congreg ?>"/>
            </div>
            <div class="col3">
              <label for="gpTrabalho">grupo de trabalho</label>
              <select name="gpTrabalho" id="select-1" class="info-input default" >
                <option  selected><?= $grupo ?></option>
              </select>
              <div class="n-cep">
                <div class="n-cep-item">
                  <label for="num">número</label>
                  <input type="number" name="num" id="num" class="info-input default" value="<?= $numeroEnde ?>"/>
                </div>
                <div class="n-cep-item">
                  <label for="cep">cep</label>
                  <input type="text" name="cep" id="cep" class="info-input default" value="<?= $cep ?>"/>
                </div>
              </div>
              <label for="ctt-celular">contato celular</label>
              <input type="tel" name="ctt-celular" id="ctt-celular" class="info-input default" value="<?= $celular ?>">
              <label for="formAcad">formação acadêmica</label>
              <input type="text" name="formAcad" id="formAcad" class="info-input default" value="<?= $formacao ?>"/>
            </div>
          </div>
          <div class="container-2">
            <div class="col4">
              <img src="../img/exemplo-user.png" alt="foto de perfil" />
              <label for="disp1">disponibilidade voluntário 1</label>
              <input type="text" name="disp1" id="disp1" class="info-input default" value="<?= $disp1 ?>"/>
              <label for="disp2">disponibilidade voluntário 2</label>
              <input type="text" name="disp2" id="disp2" class="info-input default" value="<?= $disp2 ?>"/>
              <label for="disp3">disponibilidade voluntário 3</label>
              <input type="text" name="disp3" id="disp3" class="info-input default" value="<?= $disp3 ?>"/>
            </div>
          </div>
        </section>
        <section class="box-btn" id="box-btn-section-end">
        <button class="btn-up " id="submit-info" type="button">Atualizar</button>

        </section>

    </form>
    <div class="box-btn">

    <a href="<?= site_url('consultVolu') ?>"><button class="btn-back">voltar</button></a>
    </div>
</main>
  </body>
