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
      <form method="post">
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
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
                <label for="epi-mascara">MASCARA FILTRADORA</label>
                <select name="epi-mascara" id="epi-mascara">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
                <label for="epi-luva">LUVA DE RASPA</label>
                <select name="epi-luva" id="epi-luva">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
                <label for="epi-capacete">CAPACETE DE PROTEÇÃO</label>
                <select name="epi-oculos" id="epi-capacete">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
              </div>
              <div class="epi-lacuna2">
                <label for="epi-bota">BOTA DE PROTEÇÃO</label>
                <select name="epi-bota" id="epi-bota">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
                <label for="epi-auricular">PROTETOR AURICULAR</label>
                <select name="epi-auricular" id="epi-auricular">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
                <label for="epi-cinto">CINTO DE SEGURANÇA</label>
                <select name="epi-cinto" id="epi-cinto">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
                <label for="epi-uniform">UNIFORME ESPECIAL</label>
                <select name="epi-uniform" id="epi-uniform">
                  <option value="1">NÃO</option>
                  <option value="2">SIM</option>
                </select>
              </div>
            </div>
          </div>
        </section>
        <input class="btn-enviar" type="submit" value="AVANÇAR" />
      </form>
      <button class="btn-voltar">VOLTAR</button>
    </main>
  </body>
</html>
