<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Cursos');
define('HREF', 'cadastrar_cursos.php');
define('BUTTONTEXT', 'Cadastrar Curso');

use \App\Entity\Curso;

$obCurso = new Curso;
$professor = ('SELECT nome FROM professores');

// echo "<pre>"; print_r($_POST['palavra_chave']); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['palavra_chave'],$_POST['valor'], $_POST['ordem'],$_POST['$professor'],$_POST['data'], $_POST['status'])) {

    $obCurso->nome = $_POST['nome'];
    $obCurso->palavra_chave = $_POST['palavra_chave'];
    $obCurso->valor = $_POST['valor'];
    $obCurso->ordem = $_POST['ordem'];
    $obCurso->$professor = $_POST['$professor'];
    $obCurso->data = $_POST['data'];
    $obCurso->status = $_POST['status'];
    $obCurso->cadastrar();
    // echo "<pre>"; print_r($obCurso); echo "</pre>"; exit; 

    header('location: index_cursos.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header_editar.php';

require __DIR__ . '/INCLUDES/formulario_cursos.php';

require __DIR__ . '/INCLUDES/footer.php';