<?php
    include_once 'entities/Chamado.php';
    include_once 'connections/conexao.php';

    $solicitante = $_POST['solicitante'];
    $setor = $_POST['setor'];
    $mensagem = $_POST['mensagem'];
    $tecnico = $_POST['tecnico'];

    $chamado = new Chamado($setor, $solicitante, $mensagem, $tecnico);
    
    $inserir = new Conexao;
    $inserir->insert($chamado);

    



