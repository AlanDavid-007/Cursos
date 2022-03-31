<?php
//adaptar
require __DIR__ . '/vendor/autoload.php';

define('OB', '$obCurso->nome;');
define('HREF2', 'index_cursos.php');
define('TEXT', 'Curso');

use \App\Entity\Curso;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: index_cursos.php?status=error');
    exit;
}

//Consulta Curso
$obCurso = Curso::getCurso($_GET['id']);
// echo "<pre>"; print_r($obCurso); echo "<pre>"; exit;

//Validação da Curso
if (!$obCurso instanceof Curso) {
    header('location: index_cursos.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obCurso->excluir();

    header('location: index_cursos.php?status=success');
    exit;
}

require __DIR__ . '/INCLUDES/header.php';
require __DIR__ . '/INCLUDES/confirmarExclusao.php';
require __DIR__ . '/INCLUDES/footer.php';
