<?php 
    class Produto
    {
        private $codigo;
        private $nome;
        private $preco;
        private $quantidade;

        public function __construct($codigo, $nome, $preco, $quantidade)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;

        }

        public function exibirProduto()
        {
            echo "<h2>Produto Cadastrado</h2>";
            echo "Codigo:{$this->codigo}<br>";
            echo "Nome:{$this->nome}<br>";
            echo "Preço:{$this->preco}<br>";
            echo "Quantidade:{$this->quantidade}<br>";

        }

    }
?>