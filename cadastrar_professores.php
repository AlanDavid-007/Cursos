<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Noticia');
<?php
//adaptar
use \App\Entity\Noticia;

$obNoticia = new Noticia;

// echo "<pre>"; print_r($_POST['descricao']); echo "</pre>"; exit;
if (isset($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['formacao'],$_POST['telefone'], $_POST['endereco'], $_POST['email'], $_POST['ordem'], $_POST['status'])) {

    $obNoticia->nome = $_POST['nome'];
    $obNoticia->sobrenome = $_POST['sobrenome'];
    $obNoticia->cpf = $_POST['cpf'];
    $obNoticia->formacao = $_POST['formacao'];
    $obNoticia->telefone = $_POST['telefone'];
    $obNoticia->endereco = $_POST['endereco'];
    $obNoticia->email = $_POST['email'];
    $obNoticia->ordem = $_POST['ordem'];
    $obNoticia->status = $_POST['status'];
    $obNoticia->cadastrar();
    // echo "<pre>"; print_r($obNoticia); echo "</pre>"; exit; 

    header('location: index.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/formulario_professores.php';

require __DIR__ . '/INCLUDES/footer.php';
