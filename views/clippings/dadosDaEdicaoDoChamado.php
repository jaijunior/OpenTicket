    <?php
    
    include_once 'connections/conexao.php';
    $id = strval(intval($_GET['id']));
    $conexao = new Conexao;
    $resultado = $conexao->selectWhereId('chamados', $id);    

    if($resultado->num_rows){
        while($dados = $resultado->fetch_object()){
            echo "<form action='/edicao?id={$id}' method='post'> ";
            echo "<label for='solicitante'>Solicitante</label> <br/>";
            echo "<input type='text' name='solicitante' value='{$dados->solicitante}'> <br/>";

            echo "<label for='setor'>Setor</label><br/>";
            echo "<input type='text' name='setor' value='{$dados->setor}'><br/>";

            echo "<label for='mensagem'>Ocorrência:</label><br/>";
            echo "<textarea required name='mensagem' id='' cols='30' rows='10' readonly> {$dados->mensagem} </textarea> <br/>";
        }
    } else {
        echo "<h1>ERRO, DADO NÃO ESTA NO BANCO DE DADOS </h1>";
        die("OPERAÇÃO FINALIZADA");
    }

   