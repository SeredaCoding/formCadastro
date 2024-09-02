<?php
class Database {
    private $host = 'localhost'; // ou '127.0.0.1'
    private $port = '3306'; // porta padrão do MySQL
    private $dbname = 'cadastros'; // nome do banco de dados
    private $username = 'root'; // usuário do banco de dados
    private $password = ''; // senha do banco de dados
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->dbname}", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Conexão falhou: ' . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>
