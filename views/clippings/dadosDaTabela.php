<?php
    include_once 'connections/conexao.php';
    $conexao = new Conexao();
    $resultado = $conexao->select('chamados');
    if($resultado->num_rows){

    while($dados = $resultado->fetch_object()){
            
        echo "<tr>";
        echo "<td>$dados->id</td>";
        echo "<td>$dados->solicitante</td>";
        echo "<td>$dados->setor</td>";
        echo "<td>$dados->mensagem</td>";
        echo "<td>$dados->status</td>";
        echo "<td>$dados->tecnico</td>";
        echo "<td>$dados->inicio</td>";
        echo "<td>$dados->fim</td>";
        echo "<td> <a href='/editar?id=$dados->id'> Editar </a></td>";
        echo "</tr>";
    }

    }else{
        die();
    }
