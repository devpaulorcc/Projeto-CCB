<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./error_personalizado.css">
    <title>Algo deu errado...</title>
</head>
<body>
    <h2>OPS... Algo deu errado!</h2>
    <br>
    <p><?= $error ?></p>
</body>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
}
</style>
</html>