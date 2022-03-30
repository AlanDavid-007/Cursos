<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Noticia');
<?php
//adaptar
use \App\Entity\Noticia;

$obNoticia = new Noticia;

// echo "<pre>"; print_r($_POST['palavra_chave']); echo "</pre>"; exit;
if (isset($_POST['nome'],$_POST['data'], $_POST['palavra_chave'], $_POST['ordem'],$_POST['valor'],  $_POST['status'])) {

    $obNoticia->nome = $_POST['nome'];
    $obNoticia->data = $_POST['data'];
    $obNoticia->palavra_chave = $_POST['palavra_chave'];
    $obNoticia->ordem = $_POST['ordem'];
    $obNoticia->valor = $_POST['valor'];
    $obNoticia->status = $_POST['status'];
    $obNoticia->cadastrar();
    // echo "<pre>"; print_r($obNoticia); echo "</pre>"; exit; 

    header('location: index.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/formulario_cursos.php';

require __DIR__ . '/INCLUDES/footer.php';
