<?php

    class Produtos {

        private ?int $id; // ? - indica que a variavel além de ser do tipo int ela também pode ser null
        private string $nome;
        private ?int $preco;
        private ?int $categoria;
        private ?int $quantidade;
        private string $validade;
        private string $marca;
        private string $modelo;
        private ?int $ativo;
        private string $datacadastro;

        public function __construct() { //função construtora - atribui valores(propriedades) iniciais a um objeto
            $this->id = null; //deste objeto, o id recebe 0
            $this->nome = "";
            $this->preco = null;
            $this->categoria = null;
            $this->quantidade = null;
            $this->validade = "0000-00-00 00:00:00";
            $this->marca = "";
            $this->modelo = "";
            $this->ativo = 1;
            $this->datacadastro = "0000-00-00 00:00:00";
        }

    }

?>