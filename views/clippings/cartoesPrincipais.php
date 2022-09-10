<?php
    include_once 'connections/conexao.php';
    
    
    function quantidade(string $status){
    $conexao = new Conexao;
    $atual = $conexao->selectPorStatus('chamados', $status);
    return $atual->num_rows;
    }

            echo "<div class='cartoesPrincipais'>";
                echo "<div class='aberto'>";
                    echo "<h1>Abertos</h1>";
                    echo "<hr>";
                    echo "<p class='quantidade' >".quantidade('Aberto')."</p>";
                echo "</div>";
                echo "<div class='andamento'>";
                    echo "<h1>Em Andamento</h1>";
                    echo "<hr>";
                    echo "<p class='quantidade' >".quantidade('Em Andamento')."</p>";
                echo "</div>";
                echo "<div class='pausados'>";
                    echo "<h1>Pausados</h1>";
                    echo "<hr>";
                    echo "<p class='quantidade' >".quantidade('Pausado')."</p>";
                echo "</div>";
                echo "<div class='finalizados'>";
                    echo "<h1>Finalizados</h1>";
                   echo " <hr>";
                   echo "<p class='quantidade' >".quantidade('Finalizado')."</p>";
                echo "</div>";
            echo "</div>";
