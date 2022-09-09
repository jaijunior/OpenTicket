<?php 
    include_once 'connections/conexao.php';
    $conexao = new Conexao();
    $resultado = $conexao->select('tecnicos');

    
    echo "<select name='tecnico'>";
    echo "<option value='Não Definido'>Não Definido</option>";
        while($dados = $resultado->fetch_object()){
        echo "<option value='$dados->nome'> $dados->nome </option>";        
    }
    echo "</select>";

