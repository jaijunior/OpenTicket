<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style/style.css">
    <title>EDITAR CHAMADO</title>
</head>
<body>
        <?php include 'views/clippings/header.php'; ?>

        <pre>
        
            <h1>Editar Chamado</h1>
            <form action="/cadastro" method="post">
                <label for="solicitante">Solicitante</label>
                <input type="text" name="solicitante">

                <label for="setor">Setor</label>
                <input type="text" name="setor">

                <label for="mensagem">Ocorrência:</label>
                <textarea name="mensagem" id="" cols="30" rows="10"></textarea>

                <label for="tecnico" >Técnico</label>
                <?php include_once 'views/clippings/dadosDoTecnico.php';?>

                <label for="status">Status:</label>
                <select name="status" id="" required>
                    <option value="Aberto">Aberto</option>
                    <option value="Em Andamento">Em Andamento</option>
                    <option value="Pausado">Pausado</option>
                    <option value="Finalizado">Finalizado</option>
                </select>   

                <button type="submit">CADASTRAR CHAMADO</button>
            </form>
        </pre>
</body>
</html>