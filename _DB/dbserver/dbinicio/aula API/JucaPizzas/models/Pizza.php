<?php

    class Pizza
    {
        private $conn;
        private $db_name = "pizzas";
        public $idPizza;
        public $nome;
        public $ingredientes;
        public $valor;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    }
?>