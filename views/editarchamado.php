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

        
        
            <h1>Editar Chamado</h1>
                           
                <?php include_once 'views/clippings/dadosDaEdicaoDoChamado.php'; ?>

                <label for="tecnico" >Técnico</label>
                <?php include_once 'views/clippings/dadosDoTecnico.php';?>

                <label for="status">Status:</label>
                <select name="status" id="" required>
                    <option value="Aberto">Aberto</option>
                    <option value="Em Andamento">Em Andamento</option>
                    <option value="Pausado">Pausado</option>
                    <option value="Finalizado">Finalizado</option>
                </select>   <br/>

                <button type="submit">CADASTRAR CHAMADO</button>
            </form>
        
</body>
</html>