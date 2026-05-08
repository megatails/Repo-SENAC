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

        public function getAll()
        {
            $query = "SELECT idPizza, nome, ingredientes, valor FROM {$this->db_name}";
            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }
    }
?>