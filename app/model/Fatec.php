<?php

    class Fatec {
        private ?int $id;
        private string $curso;
        private string $periodo;
        private int $vagas;
        private string $datacadastro;
        private int $ativo;
    
        public function __construct(){
            $this->id = 0;
            $this->curso = "";
            $this->periodo = "";
            $this->vagas = 0;
            $this->datacadastro = "0000-00-00 00:00:00";
            $this->ativo = 1;
        }

        public function configSi(): void{
            $this->id = null;
            $this->curso = "Sistemas para Internet";
            $this->periodo = "Manhã";
            $this->vagas = 40;
            $this->datacadastro = "2026-05-15 11:52:00";
            $this->ativo = 1;
        }
    }

?>