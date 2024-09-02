<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icone.png" type="image/png">
    <title>
    <?php
    if(isset($_GET) && isset($_GET['action'])){
        if($_GET['action'] == 'edit'){
            echo 'Edição de contatos';
        }
    }else{
        echo 'Cadastro de contatos';
    }
    ?> - Alphacode
    </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/25f8242477.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<header class="text-white row bg">
    <div class="col-2 d-flex align-items-center">
        <img src="assets/logo_alphacode.png" alt="Logo" class="img-fluid">
    </div>
    <div class="col-10 d-flex align-items-center justify-content-left">
        <h2 class="m-0">
        <?php
        if(isset($_GET) && isset($_GET['action'])){
            if($_GET['action'] == 'edit'){
                echo 'Edição de contatos';
            }
        }else{
            echo 'Cadastro de contatos';
        }
        ?>
        </h2>
    </div>
</header>

<?php
require_once 'controllers/ContatoController.php';
require_once 'models/Contato.php';
require_once 'config/database.php';

// Criação do PDO e inicialização do modelo e controlador
$database = new Database();
$pdo = $database->getConnection();

$contatoModel = new Contato($pdo);
$contatoController = new ContatoController($contatoModel);

// Determinar a ação a ser tomada
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create': // Adicionando a rota para create
            $contatoController->create();
            break;
        case 'delete': // Adicionando a rota para delete
            $contatoController->delete();
            break;
        case 'edit': // Adicionando a rota para edit
            $contatoController->edit();
            break;
        case 'update': // Adicionando a rota para update
            $contatoController->update();
            break;
        default:
            $contatoController->list(); // Exibe o formulário e a lista de contatos
            require_once 'views/footer.php';
            break;
    }
} else {
    $contatoController->list(); // Exibe o formulário e a lista de contatos
    require_once 'views/footer.php';
}

//Mensagens do alert
if(isset($_GET['result']) && isset($_GET['resposta'])){
    $result = $_GET['result'];
    $resposta = $_GET['resposta'];
    function alert($string){
        echo "<script>alert('$string');</script>";
    }    
    switch ($result) {
        case 'delete':
            if($resposta){
                alert('Contato excluido com sucesso!');
            }else{
                echo "<script>alert('Erro ao excluir contato!');</script>";
            } 
            break;
        case 'edit':
            if($resposta){
                //echo "<script>alert('Contato editado com sucesso!');</script>";
            }else{
                echo "<script>alert('Erro ao editar contato!');</script>";
            } 
            break;
        case 'create':
            if($resposta){
                echo "<script>alert('Contato criado com sucesso!');</script>";
            }else{
                echo "<script>alert('Erro ao criar contato!');</script>";
            } 
            break;
        case 'update':
            if($resposta){
                echo "<script>alert('Alterações feitas com sucesso!');</script>";
            }else{
                echo "<script>alert('Erro ao salvar alterações!');</script>";
            } 
            break;
        default:      
            break;
    }
    exit;
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
