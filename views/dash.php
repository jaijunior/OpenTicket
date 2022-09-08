<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/style/style.css">
    <title>DASHBOARD</title>
</head>
<body>
    <?php include 'views/clippings/header.php'; ?>
    <main>
        <div class="cartoesPrincipais">
            <div>
                <h1>Chamados Abertos</h1>

            </div>
            <div>
                <h1>Chamados em Andamento</h1>
            </div>
            <div>
                <h1>Chamados Finalizados</h1>
            </div>
        </div>
        <div class="botaoTabela">
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SOLICITANTE</th>
                            <th>SETOR</th>
                            <th>MENSAGEM</th>
                            <th>STATUS</th>
                            <th>TÉCNICO RESPONSAVEL</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href="/novochamado"><span>NOVO CHAMADO </span></a>
            </div>
        </div>
    </main>
</body>
</html>