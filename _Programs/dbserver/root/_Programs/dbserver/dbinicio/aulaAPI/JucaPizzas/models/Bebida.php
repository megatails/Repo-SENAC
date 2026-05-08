<?php 
class Bebida 
{
    private $tabela = "bebidas";
    private $conn;
    public $idBebida;
    public $nome;
    public $valor;
    public $tipo;
    public $volumeMl;

    public function __construct($db) 
    {
        $this->conn = $db;
    }

    public function getAll() 
    {
        $query = "SELECT idBebida, nome, valor, tipo, volumeMl from {$this->tabela}";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}

