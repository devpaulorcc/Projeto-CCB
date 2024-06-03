<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/padrao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/cad-second.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/header.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <header>
        <nav class="header-container">
          <h1>Cadastro  2/3</h1>
            <a class="icon-fixed" href="<?= site_url('main')?>"><i class="bi bi-house"></i></a>
        </nav>
    </header>
    <main>
        <?=form_open("cadastroS")?>
        <section class="container-box">
          <div class="dispvolun">
            <h1>DISPONIBILIDADE DO VOLUNTÁRIO</h1>
            <label for="formacaoAcad">FORMAÇÃO ACADEMICA</label>
            <input type="text" name="formacaoAcad" id="formacaoAcad" />

            <label for="dispvolun1">DISPONIBILIDADE VOLUNTÁRIO 1</label>
            <input type="text" name="dispvolun1" id="dispvolun1" />

            <label for="dispvolun2">DISPONIBILIDADE VOLUNTÁRIO 2</label>
            <input type="text" name="dispvolun2" id="dispvolun2" />

            <label for="dispvolun3">DISPONIBILIDADE VOLUNTÁRIO 3</label>
            <input type="text" name="dispvolun3" id="dispvolun3" />
          </div>
          <div class="epis">
            <h1>EPIS NECESSÁRIOS ENTREGUES</h1>
            <div class="epis-itens">
              <div class="epi-lacuna1">
                <label for="epi-oculos">ÓCULOS DE PROTEÇÃO</label>
                <select name="epi-oculos" id="epi-oculos">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
                <label for="epi-mascara">MASCARA FILTRADORA</label>
                <select name="epi-mascara" id="epi-mascara">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
                <label for="epi-luva">LUVA DE RASPA</label>
                <select name="epi-luva" id="epi-luva">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
                <label for="epi-capacete">CAPACETE DE PROTEÇÃO</label>
                <select name="epi-capacete" id="epi-capacete">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
              </div>
              <div class="epi-lacuna2">
                <label for="epi-bota">BOTA DE PROTEÇÃO</label>
                <select name="epi-bota" id="epi-bota">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
                <label for="epi-auricular">PROTETOR AURICULAR</label>
                <select name="epi-auricular" id="epi-auricular">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
                <label for="epi-cinto">CINTO DE SEGURANÇA</label>
                <select name="epi-cinto" id="epi-cinto">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
                <label for="epi-uniform">UNIFORME ESPECIAL</label>
                <select name="epi-uniform" id="epi-uniform">
                  <option>NÃO</option>
                  <option>SIM</option>
                </select>
              </div>
            </div>
          </div>
        </section>
        <input class="btn-enviar" type="submit" value="AVANÇAR" />
      <?=form_close()?>
      <a href="<?= site_url('cadastro') ?>"><button class="btn-voltar">VOLTAR</button></a>
      
    </main>
  </body>
</html>
