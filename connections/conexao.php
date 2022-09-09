<?php 
    include_once 'entities/Chamado.php';
    class Conexao{

        private mysqli $conexao;

        function __construct()
        {
        $hostname = 'localhost';
        $usuario = "root";
        $senha = '123';
        $bancoDeDados = 'chamados';
        
        $this->conexao = new mysqli($hostname, $usuario, $senha, $bancoDeDados);
        }
        
        function select(string $tabela) {
            $sql = "SELECT * FROM $tabela";
            return $resultado = $this->conexao->query($sql);
        }

        function insert(Chamado $chamado){            
            $sql = "INSERT INTO chamados (solicitante, setor, mensagem, tecnico) VALUES ('{$chamado->getSolicitante()}','{$chamado->getSetor()}','{$chamado->getMensagem()}','{$chamado->getTecnico()}')";
            return $resultado = $this->conexao->query($sql) or die($this->conexao->error);
        }
    }
?>