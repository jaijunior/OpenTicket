<?php
    include 'entities/Chamado.php';

    $solicitante = $_POST['solicitante'];
    $setor = $_POST['setor'];
    $mensagem = $_POST['mensagem'];

    $chamado = new Chamado($setor, $solicitante, $mensagem);

    
    echo $chamado;

    header('Location: /');



