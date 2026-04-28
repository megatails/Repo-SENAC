<?php

class Database
{
    private $host = 'localhost';
    private $db_name = 'jucapizzas';
    private $username = 'root';
    private $password = 'usbw';
    //private $port = '0000'; 

    public $conn;

    public function getConnection() 
    {
        $this->conn = null; // $this acessa os atributos de uma classe


        try { //tenta executar codigo potencialmente perigoso
            echo 'Tried!<br>';
            // DSN (Data Source Name) - String de conexão
            $dsn = 'mysql:host=' . $this->host /*. ';port=' . $this.port*/ . ';db_name=' . 
            $this->db_name . ';charset=utf8';

            // Instancia do objeto PD0
            $this->conn = new PDO($dsn, $this->username, $this->password);

            // Define o modo de erro do PDO para execução
            // Isso faz com que  o PDO lance exceções em caso de erros, facilitando o tratamento
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
        } catch (PDOException $e) { //Em caso de erro na conexão, exibe a mensagem de erro.
            echo 'PDOException!<br>';
            echo 'Erro de Conexão: ' . $e->getMessage();
        } catch (Exception $e) {
            echo '<br>Exception!<br>';
            echo 'Erro: ' . $e->getMessage();
        }
        finally{
            echo '<br>finally!';


        }
        return $this->conn;
    }
}