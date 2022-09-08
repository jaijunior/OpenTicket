<?php

    Class Chamado{

        private $setor;
        private $solicitante;
        private $status;
        private $mensagem;
        private $tecnico;

        public function __construct($setor, $solicitante, $mensagem)
        {
            $this->setor = $setor;
            $this->solicitante = $solicitante;
            $this->mensagem = $mensagem;

        }

        public function getSetor(){
            return $this->setor;
        }

        public function setSetor($setor){
            $this->setor = $setor;
        }

        public function getSolicitante(){
            return $this->solicitante;
        }

        public function setSolicitante($solicitante){
            $this->solicitante = $solicitante;
        }
        
        public function getStatus(){
            return $this->status;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function getMensagem(){
            return $this->mensagem;
        }

        public function setMensagem($mensagem){
            $this->mensagem = $mensagem;
        }

        public function getTecnico(){
            return $this->tecnico;
        }

        public function setTecnico($tecnico){
            $this->tecnico = $tecnico;
        }

        public function __toString()
        {
            return $this->solicitante 
                . "\n"
                . $this->setor
                . " " 
                .$this->mensagem;
        }
    
    }
