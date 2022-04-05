<?php
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastrar Categoria');
define('HREF', '../Cadastrar/cadastrar_categorias.php');
define('BUTTONTEXT', ' Cadastrar Categoria');

//adaptar
use \App\Entity\Categoria;

$obCategoria = new Categoria;

// echo "<pre>"; print_r($_POST['descricao']); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'], $_POST['ordem'], $_POST['status'])) {

    $obCategoria->nome = $_POST['nome'];
    $obCategoria->descricao = $_POST['descricao'];
    $obCategoria->ordem = $_POST['ordem'];
    $obCategoria->status = $_POST['status'];
    $obCategoria->cadastrar();
    // echo "<pre>"; print_r($obCategoria); echo "</pre>"; exit; 

    header('location: ../Index/index_categorias.php?status=success');
    exit;
}

require __DIR__ . '../../INCLUDES/header_editar.php';

require __DIR__ . '../../INCLUDES/formulario_categorias.php';

require __DIR__ . '../../INCLUDES/footer.php';