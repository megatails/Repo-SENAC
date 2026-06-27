<?php

namespace Megatails\JucaPizzas\Models;
use Exception;

use PDO;
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

    public function get(){
        $query = "SELECT idPizza, nome, valor, ingredientes from {$this->db_name} WHERE idBebida = ? LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->idPizza);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->valor = $row['valor'];
        $this->ingredientes = $row['ingredientes'];
    }

    public function getAll()
    {
        $query = "SELECT idPizza, nome, ingredientes, valor FROM {$this->db_name}";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function add(){
        $query = 'INSERT INTO ' . $this->db_name . ' SET nome = :nome, ingredientes = :ingredientes, valor = :valor';
 
        // Preparar a query
        $stmt = $this->conn->prepare($query);
 
        // Limpar os dados
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->ingredientes = htmlspecialchars(strip_tags($this->ingredientes));
        $this->valor = htmlspecialchars(strip_tags($this->valor));
 
        // Vincular os parâmetros
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':ingredientes', $this->ingredientes);
        $stmt->bindParam(':valor', $this->valor);
 
        // Executar a query
        if ($stmt->execute()) {
            return true;
        }        
        return false;
    }

    public function update() {
        // Query de atualização
        $query = 'UPDATE ' . $this->db_name . ' SET nome=:nome, ingredientes=:ingredientes, valor=:valor WHERE idPizza=:id';
 
        // Preparar a query
        $stmt = $this->conn->prepare($query);
 
        // Limpar os dados
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->ingredientes = htmlspecialchars(strip_tags($this->ingredientes));
        $this->valor = htmlspecialchars(strip_tags($this->valor));
        $this->idPizza = htmlspecialchars(strip_tags($this->idPizza));
 
        // Vincular os parâmetros
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':ingredientes', $this->ingredientes);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':id', $this->idPizza);
 
        // Executar a query
        if($stmt->execute()) {
            return true;
        }
     
        return false;
    }

    public function getValor() {
        return $this->valor;
    }
    
    public function setValor(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("Valor inválido. É necessário um valor maior que zero.");
        }
        $this->valor = $valor;
    }

    public function getName (): string
    {
        return $this->nome;
    }

        public function setName (string $nome): void
    {
        if (trim($nome) == '') 
        {
            throw new Exception("Valor Inválido. É necessário preencher o nome");
        } 
        else if (strlen($nome) < 3)
        {
            throw new Exception("Valor Inválido. O nome deve ter no mínimo 3 caracteres.");
        }
        $this->nome = $nome;
    }
}

