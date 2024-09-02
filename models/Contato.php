<?php
class Contato {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getContatos() {
        try {
            // Verifica se a conexão PDO foi criada corretamente
            if ($this->pdo === null) {
                throw new Exception('Conexão com o banco de dados não foi estabelecida.');
            }
    
            $stmt = $this->pdo->query('SELECT * FROM contatos');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Captura e exibe a mensagem de erro de PDO
            echo 'Erro de PDO: ' . $e->getMessage();
            return false;
        } catch (Exception $e) {
            // Captura e exibe qualquer outra exceção
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    public function createContato($data) {
        try {
            // Verifica se a conexão PDO foi criada corretamente
            if ($this->pdo === null) {
                throw new Exception('Conexão com o banco de dados não foi estabelecida.');
            }

            $stmt = $this->pdo->prepare('INSERT INTO contatos (nome_completo, data_nascimento, email, profissao, telefone_contato, celular_contato, whatsapp, notificacao_email, notificacao_sms) VALUES (:nome_completo, :data_nascimento, :email, :profissao, :telefone_contato, :celular_contato, :whatsapp, :notificacao_email, :notificacao_sms)');
            if($stmt->execute([
                ':nome_completo' => $data['nome_completo'],
                ':data_nascimento' => $data['data_nascimento'],
                ':email' => $data['email'],
                ':profissao' => $data['profissao'],
                ':telefone_contato' => $data['telefone_contato'],
                ':celular_contato' => $data['celular_contato'],
                ':whatsapp' => $data['whatsapp'] ?? 0,
                ':notificacao_email' => $data['notificacao_email'] ?? 0,
                ':notificacao_sms' => $data['notificacao_sms'] ?? 0,
            ])){
                return true;
            }else{
                return false;
            }  
        } catch (PDOException $e) {
            // Captura e exibe a mensagem de erro de PDO
            echo 'Erro de PDO: ' . $e->getMessage();
            return false;
        } catch (Exception $e) {
            // Captura e exibe qualquer outra exceção
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }
    

    public function updateContato($id, $data) {
        try {
            // Verifica se a conexão PDO foi criada corretamente
            if ($this->pdo === null) {
                throw new Exception('Conexão com o banco de dados não foi estabelecida.');
            }
            $stmt = $this->pdo->prepare('UPDATE contatos SET nome_completo = :nome_completo, data_nascimento = :data_nascimento, email = :email, profissao = :profissao, telefone_contato = :telefone_contato, celular_contato = :celular_contato, whatsapp = :whatsapp, notificacao_email = :notificacao_email, notificacao_sms = :notificacao_sms WHERE id = :id');
            if($stmt->execute([
                ':id' => $id,
                ':nome_completo' => $data['nome_completo'],
                ':data_nascimento' => $data['data_nascimento'],
                ':email' => $data['email'],
                ':profissao' => $data['profissao'],
                ':telefone_contato' => $data['telefone_contato'],
                ':celular_contato' => $data['celular_contato'],
                ':whatsapp' => isset($data['whatsapp']) ? 1 : 0,
                ':notificacao_email' => isset($data['notificacao_email']) ? 1 : 0,
                ':notificacao_sms' => isset($data['notificacao_sms']) ? 1 : 0,
            ])){
                return true;
            }else{
                return false;
            }
        }  catch (PDOException $e) {
            // Captura e exibe a mensagem de erro de PDO
            echo 'Erro de PDO: ' . $e->getMessage();
            return false;
        } catch (Exception $e) {
            // Captura e exibe qualquer outra exceção
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    public function deleteContato($id) {
        try {
            // Verifica se a conexão PDO foi criada corretamente
            if ($this->pdo === null) {
                throw new Exception('Conexão com o banco de dados não foi estabelecida.');
            }
            $stmt = $this->pdo->prepare('DELETE FROM contatos WHERE id = :id');
            if($stmt->execute([':id' => $id])){
                return true;
            }else{
                return false;
            }  
        }  catch (PDOException $e) {
            // Captura e exibe a mensagem de erro de PDO
            echo 'Erro de PDO: ' . $e->getMessage();
            return false;
        } catch (Exception $e) {
            // Captura e exibe qualquer outra exceção
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    public function getContatoId($id) {
        try{
            // Verifica se a conexão PDO foi criada corretamente
            if ($this->pdo === null) {
                throw new Exception('Conexão com o banco de dados não foi estabelecida.');
            }
            $stmt = $this->pdo->prepare('SELECT * FROM contatos WHERE id = :id');
            $stmt->execute([':id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Captura e exibe a mensagem de erro de PDO
            echo 'Erro de PDO: ' . $e->getMessage();
            return false;
        } catch (Exception $e) {
            // Captura e exibe qualquer outra exceção
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
        
    }
}
?>
