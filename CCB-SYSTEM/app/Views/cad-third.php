<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/padrao.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/cad-third.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/styles/header.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
  <header>
        <nav class="header-container">
          <h1>Cadastro  3/3</h1>
            <a class="icon-fixed" href="<?= site_url('main')?>"><i class="bi bi-house"></i></a>
        </nav>
    </header>
    <main>
      <div class="main-title">
          <h1>VIGÊNCIA DE CERTIFICAÇÃO E RECICLAGEM</h1>
      </div>
      <?=form_open("cadastroT")?>
      <table>
        <thead>
            <tr>
                <th>NR'S</th>
                <th>DATA INÍCIO</th>
                <th>DATA VENCIMENTO</th>
                <th>DATA RECICLAGEM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>NR10</td>
                <td><input type="date" name="nr10-data-inicio" id="nr10-data-inicio"></td>
                <td><input type="date" name="nr10-data-vencimento" id="nr10-data-vencimento"></td>
                <td><input type="date" name="nr10-data-reciclagem" id="nr10-data-reciclagem"></td>
                
            </tr>
            <tr>
                <td>NR33</td>
                <td><input type="date" name="nr33-data-inicio" id="nr33-data-inicio"></td>
                <td><input type="date" name="nr33-data-vencimento" id="nr33-data-vencimento"></td>
                <td><input type="date" name="nr33-data-reciclagem" id="nr33-data-reciclagem"></td>
                
            </tr>
            <tr>
                <td>NR35</td>
                <td><input type="date" name="nr35-data-inicio" id="nr35-data-inicio"></td>
                <td><input type="date" name="nr35-data-vencimento" id="nr35-data-vencimento"></td>
                <td><input type="date" name="nr35-data-reciclagem" id="nr35-data-reciclagem"></td>
              
            </tr>
            <tr>
                <td>ASO</td>
                <td><input type="date" name="aso-data-inicio" id="aso-data-inicio"></td>
                <td><input type="date" name="aso-data-vencimento" id="aso-data-vencimento"></td>
                <td><input type="date" name="aso-data-reciclagem" id="aso-data-reciclagem"></td>
              
            </tr>
        </tbody>
    </table>
    <div class="box-btn">
    <input class="btn-enviar" type="submit" value="avançar">
  </div>

  <?=form_close()?>
  
  <a href="<?= site_url('cadastro/segunda') ?>"><button class="btn-voltar">VOLTAR</button></a>
    </main>
  </body>
</html>
