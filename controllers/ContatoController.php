<?php
require_once 'models/Contato.php';

class ContatoController {
    private $contatoModel;

    public function __construct($contatoModel) {
        $this->contatoModel = $contatoModel;
    }

    public function list() {
        $contatos = $this->contatoModel->getContatos();
        include 'views/contato_form.php'; // Incluindo o formulário de cadastro
        include 'views/contato_list.php'; // Incluindo a lista de contatos
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome_completo' => $_POST['nome_completo'],
                'data_nascimento' => $_POST['data_nascimento'],
                'email' => $_POST['email'],
                'profissao' => $_POST['profissao'],
                'telefone_contato' => $_POST['telefone_contato'],
                'celular_contato' => $_POST['celular_contato'],
                'whatsapp' => isset($_POST['whatsapp']) ? 1 : 0,
                'notificacao_email' => isset($_POST['notificacao_email']) ? 1 : 0,
                'notificacao_sms' => isset($_POST['notificacao_sms']) ? 1 : 0,
            ];
            $create = $this->contatoModel->createContato($data);
            if ($create) {
                header('Location: index.php?result=create&resposta=1');
            } else {
                header('Location: index.php?result=create&resposta=0');
            }
            
            exit();
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $delete = $this->contatoModel->deleteContato($_GET['id']);
            if($delete){
                header('Location: index.php?result=delete&resposta=1');
            }else{
                header('Location: index.php?result=delete&resposta=0');
            }
            exit();
        }
    }

    public function edit() {
        if (isset($_GET['id'])) {
            $contato = $this->contatoModel->getContatoId($_GET['id']);
            if ($contato) {
                include 'views/contato_edit.php'; // Incluindo uma view separada para edição
                require_once 'views/footer.php';
            } else {
                header('Location: index.php?result=edit&resposta=0');
            }
            exit();
        }
    }
    
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
            $data = [
                'nome_completo' => $_POST['nome_completo'],
                'data_nascimento' => $_POST['data_nascimento'],
                'email' => $_POST['email'],
                'profissao' => $_POST['profissao'],
                'telefone_contato' => $_POST['telefone_contato'],
                'celular_contato' => $_POST['celular_contato'],
                'whatsapp' => $_POST['whatsapp'],
                'notificacao_email' => $_POST['notificacao_email'],
                'notificacao_sms' => $_POST['notificacao_sms'],
            ];
            $update = $this->contatoModel->updateContato($_GET['id'], $data);
            if ($update) {
                header('Location: index.php?result=update&resposta=1');
            } else {
                header('Location: index.php?result=update&resposta=0');
            }
            exit();
        }
    } 
}
?>
