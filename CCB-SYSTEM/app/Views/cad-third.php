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
      <form method="post">
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
                <td><input type="date" id="nr10-data-inicio"></td>
                <td><input type="date" id="nr10-data-vencimento"></td>
                <td><input type="date" id="nr10-data-reciclagem"></td>
                
            </tr>
            <tr>
                <td>NR33</td>
                <td><input type="date" id="nr33-data-inicio"></td>
                <td><input type="date" id="nr33-data-vencimento"></td>
                <td><input type="date" id="nr33-data-reciclagem"></td>
                
            </tr>
            <tr>
                <td>NR35</td>
                <td><input type="date" id="nr35-data-inicio"></td>
                <td><input type="date" id="nr35-data-vencimento"></td>
                <td><input type="date" id="nr35-data-reciclagem"></td>
              
            </tr>
            <tr>
                <td>ASO</td>
                <td><input type="date" id="aso-data-inicio"></td>
                <td><input type="date" id="aso-data-vencimento"></td>
                <td><input type="date" id="aso-data-reciclagem"></td>
              
            </tr>
        </tbody>
    </table>
    <div class="box-btn">
    <input class="btn-enviar" type="submit" value="avançar">
    </div>
      </form>
      <button class="btn-voltar">VOLTAR</button>
    </main>
  </body>
</html>
