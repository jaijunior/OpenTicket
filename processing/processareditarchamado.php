<?php
    include_once 'entities/Chamado.php';
    include_once 'connections/conexao.php';

    $id = intval($_GET['id']);
    $solicitante = $_POST['solicitante'];
    $setor = $_POST['setor'];
    $mensagem = $_POST['mensagem'];
    $tecnico = $_POST['tecnico'];
    $status = $_POST['status'];

    $chamado = new Chamado($setor, $solicitante, $mensagem, $tecnico);
    $chamado->setStatus($status);
    
    $atualizar = new Conexao;
    $atualizar->update($chamado, $id);

    header('Location: /');