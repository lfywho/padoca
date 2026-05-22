<?php

    class Produtos { // Objeto

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
            $this->id = null;
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


        // getters

        public function getId(): ?int{
            return $this->id;
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function getPreco(): ?int{
            return $this->preco;
        }

        public function getCategoria(): ?int{
            return $this->categoria;
        }

        public function getQuantidade(): ?int{
            return $this->quantidade;
        }

        public function getValidade(): string{
            return $this->validade;
        }

        public function getMarca(): string{
            return $this->marca;
        }

        public function getModelo(): string{
            return $this->modelo;
        }

        public function getAtivo(): ?int{
            return $this->ativo;
        }

        public function getDatacadastro(): string{
            return $this->datacadastro;
        }

        // setters

        public function setId(?int $valor): void{
            $this->id = $valor;
        }

        public function setNome(string $valor): void{
            $this->nome = $valor;
        }

        public function setPreco(?int $valor): void{
            $this->preco = $valor;
        }

        public function setcCategoria(?int $valor): void{
            $this->categoria = $valor;
        }

        public function setQuantidade(?int $valor): void{
            $this->quantidade = $valor;
        }

        public function setValidade(string $valor): void{
            $this->validade = $valor;
        }

        public function setMarca(string $valor): void{
            $this->marca = $valor;
        }

        public function setModelo(string $valor): void{
            $this->modelo = $valor;
        }

        public function setAtivo(?int $valor): void{
            $this->ativo = $valor;
        }

        public function setDatacadastro(string $valor): void{
            $this->datacadastro = $valor;
        }

        // funções específicas

        public function capturarDado(int $idproduto): bool{
            // declaração
            $dec= "SELECT * FROM produtos AS p WHERE p.id = $idproduto LIMIT 1"; //dec declaração / req requisição
            
            // emitir
            $resp = []; // resp resposta / res response || aqui deveria entrar a consulta no banco de dados para retornar valores
            if(count($resp) == 1){ //count / conta a quantidade de índices
                $this->id = $resp[0]["id"] ?? null;
                $this->nome = $resp[0]["nome"] ?? "";
                $this->preco = $resp[0]["preco"]  ?? 0;
                $this->categoria = $resp[0]["categoria"] ?? 0;
                $this->quantidade = $resp[0]["quantidade"] ?? 0;
                $this->validade = $resp[0]["validade"] ?? "0000-00-00 00:00:00";
                $this->marca = $resp[0]["marca"] ?? "";
                $this->modelo = $resp[0]["modelo"] ?? "";
                $this->ativo = $resp[0]["ativo"] ?? 1;
                $this->datacadastro = $resp[0]["datacadastro"] ?? "0000-00-00 00:00:00";
                return true;
            } else {

                return false;
            }
        }

    }

?>