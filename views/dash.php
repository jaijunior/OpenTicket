<?php
    
?>

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
        <section class='primeirasessao'>
            <?php include_once 'views/clippings/cartoesPrincipais.php'; ?>
        </section>
        <div class="botaoTabela">
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SOLICITANTE</th>
                            <th>SETOR</th>
                            <th>ASSUNTO</th>
                            <th>STATUS</th>
                            <th>TÉCNICO RESPONSAVEL</th>
                            <th>INÍCIO</th>
                            <th>FIM</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'views/clippings/dadosDaTabela.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>