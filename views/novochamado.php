<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style/style.css">
    <title>Novo Chamado</title>
</head>
<body>
        <?php include 'views/clippings/header.php'; ?>

        <pre>
        
            <h1>Novo Chamado</h1>
            <form action="/cadastro" method="post">
                <label for="solicitante">Solicitante</label>
                <input type="text" name="solicitante" required>

                <label for="setor">Setor</label>
                <input type="text" name="setor" required>

                <label for="mensagem">Ocorrência:</label>
                <textarea name="mensagem" id="" cols="30" rows="5" maxlength="60" required></textarea>

                <label for="tecnico" >Técnico</label>
                <?php include_once 'views/clippings/dadosDoTecnico.php';?>              

                <button type="submit">CADASTRAR CHAMADO</button>
            </form>
        </pre>
</body>
</html>