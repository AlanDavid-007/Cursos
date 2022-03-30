<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Noticia');

//adaptar
use \App\Entity\Noticia;

$obNoticia = new Noticia;

// echo "<pre>"; print_r($_POST['descricao']); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'], $_POST['ordem'], $_POST['status'])) {

    $obNoticia->nome = $_POST['nome'];
    $obNoticia->descricao = $_POST['descricao'];
    $obNoticia->ordem = $_POST['ordem'];
    $obNoticia->status = $_POST['status'];
    $obNoticia->cadastrar();
    // echo "<pre>"; print_r($obNoticia); echo "</pre>"; exit; 

    header('location: index.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/formulario_categorias.php';

require __DIR__ . '/INCLUDES/footer.php';
