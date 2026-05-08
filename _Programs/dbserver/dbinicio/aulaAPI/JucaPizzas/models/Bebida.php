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

    public function get(){
        $query = "SELECT idBebida, nome, valor, tipo, volumeMl from {$this->tabela} WHERE = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->idBebida);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->valor = $row['valor'];
        $this->tipo = $row['tipo'];
        $this->volumeMl = $row['volumeMl'];
    }

    public function getAll() 
    {
        $query = "SELECT idBebida, nome, valor, tipo, volumeMl from {$this->tabela}";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}

