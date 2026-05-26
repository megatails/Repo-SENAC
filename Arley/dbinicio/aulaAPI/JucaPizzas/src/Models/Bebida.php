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
        $query = "SELECT idBebida, nome, valor, tipo, volumeMl from {$this->tabela} WHERE idBebida = ? LIMIT 1";

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

    public function add(){
        $query = 'INSERT INTO ' . $this->tabela . ' SET nome = :nome, tipo = :tipo, valor = :valor, volumeMl = :volumeMl';

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->tipo = htmlspecialchars(strip_tags($this->tipo));
        $this->valor = htmlspecialchars(strip_tags($this->valor));
        $this->volumeMl = htmlspecialchars(strip_tags($this->volumeMl));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':volumeMl', $this->volumeMl);

        if ($stmt->execute()){
            return true;
        }
        return false;
    }

        public function update() {
        // Query de atualização
        $query = 'UPDATE ' . $this->tabela . ' SET nome=:nome, tipo=:tipo, valor=:valor, volumeMl=:volumeMl  WHERE idBebida=:id';
 
        // Preparar a query
        $stmt = $this->conn->prepare($query);
 
        // Limpar os dados
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->tipo = htmlspecialchars(strip_tags($this->tipo));
        $this->valor = htmlspecialchars(strip_tags($this->valor));
        $this->volumeMl = htmlspecialchars(strip_tags($this->volumeMl));
        $this->idBebida = htmlspecialchars(strip_tags($this->idBebida));
 
        // Vincular os parâmetros
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':volumeMl', $this->volumeMl);
        $stmt->bindParam(':id', $this->idBebida);
 
        // Executar a query
        if($stmt->execute()) {
            return true;
        }
     
        return false;
    }
}

